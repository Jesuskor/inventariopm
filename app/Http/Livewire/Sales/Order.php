<?php

namespace App\Http\Livewire\Sales;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use App\Models\ProductSale;
use App\Models\Sale;
use Livewire\Component;

class Order extends Component
{

    public $categories = [], $products = [];
    public $selectedCategoryId, $selectedProductId;
    public $search, $selectedProducts = [], $product;
    public $quantity = [];
    public $total = 0;
    public $customer;
    public $selectedCustomer, $customers, $selectedCustomerId, $customerSelect, $customerInfo;
    public $searchCustomer;

    protected $listeners = [
        'getProductsByCategoryId' => 'getProductsByCategoryId',
    ];

    public function mount()
    {
        $this->customers = Customer::select('id', 'name')->get()->toArray();
        $this->categories = Category::select('id', 'name')->get()->toArray();
    }

    public function selectCustomer($id)
    {
        $this->selectedCustomer = Customer::find($id);
        $this->customerInfo = $this->selectedCustomer->toArray();
    }

    public function render()
    {
        $this->customers = Customer::where('name', 'like', '%'.$this->searchCustomer.'%')->get();
        return view('livewire.sales.order', [
            'categories' => $this->categories,
            'selectedProducts' => $this->selectedProducts,
            'customers' => $this->customers,
            'customerInfo' => $this->customerInfo,
            'selectedCustomer' => $this->selectedCustomer,
            ]);
    }

    public function deleteCustomerSelected()
    {
        $this->selectedCustomer = null;
        $this->customerInfo = null;
    }

    public function save()
    {

        // Validar que se ha seleccionado un cliente
        if (!$this->selectedCustomerId) {
            $this->addError('selectedCustomer', 'Debes seleccionar un cliente.');
            return;
        } else {
            $this->selectedCustomerId = $this->selectedCustomer['id'];
        }

        // Validar categoria
        if (!$this->selectedCategoryId) {
            $this->addError('category_id', 'Debe seleccionar una categoría.');
            return;
        }

        // Validar si se ha seleccionado al menos un producto
        if (count($this->selectedProducts) == 0) {
            $this->addError('no_products_selected', 'Debe seleccionar al menos un producto.');
            return;
        }

        // Crear una nueva venta
        $sale = Sale::create([
            'customer_id' => $this->selectedCustomer['id'],
            'total_price' => 0,
        ]);

        // Variable para llevar la cuenta del total de la venta
        $totalPrice = 0;

        // Agregar todos los productos seleccionados a la venta
        foreach ($this->selectedProducts as $selectedProduct) {
            $product = Product::find($selectedProduct['product_id']);

            // Actualizar el stock del producto
            $product->stock -= $selectedProduct['quantity'];
            $product->save();

            // Calcular el precio total del producto y sumarlo al total de la venta
            $priceTotal = $product->price * $selectedProduct['quantity'];
            $totalPrice += $priceTotal;

            // Crear una nueva relación producto-venta con la cantidad y el precio
            $sale->products()->attach($product->id, [
                'quantity' => $selectedProduct['quantity'],
                'price' => $product->price,
            ]);
        }

        // Guardar el total de la venta en la tabla de ventas
        $sale->total_price = $totalPrice;
        $sale->save();

        // Limpiar los productos seleccionados y la cantidad
        $this->selectedProducts = [];
        $this->quantity = [];

        // Redirigir al usuario a la página de la venta creada
        return redirect()->route('sale-details', ['id' => $sale->id]);
    }

    public function hydrate()
    {
        $this->dispatchBrowserEvent('render-select2');
    }

    public function getProductsByCategoryId()
    {
        $this->products = Product::select('id', 'name', 'price', 'stock', 'image', 'category_id')
            ->whereCategoryId($this->selectedCategoryId)
            ->get()
            ->toArray();

        $this->emit('productsSelected', $this->products);

        foreach ($this->products as $product) {
            $this->quantity[$product['id']] = 0;
        }

    }

    public function addToSelectedProducts($productId)
    {
        $product = Product::find($productId);
        if ($product) {
            $quantity = $this->quantity[$productId];
            $availableStock = $product->stock;
            foreach ($this->selectedProducts as $selectedProduct) {
                if ($selectedProduct['product_id'] == $productId) {
                    $availableStock -= $selectedProduct['quantity'];
                }
            }
            if ($quantity < 0) {
                $this->addError('quantity_'.$productId, 'La cantidad debe ser mayor o igual a cero.');
            } elseif ($quantity > $availableStock) {
                $this->addError('quantity_'.$productId, 'La cantidad seleccionada supera el stock disponible del producto.');
            } elseif ($quantity == 0) {
                $this->addError('quantity_'.$productId, 'La cantidad no debe ser cero.');
            } else {
                $foundProduct = false;
                foreach ($this->selectedProducts as &$selectedProduct) {
                    if ($selectedProduct['product_id'] == $productId) {
                        $selectedProduct['quantity'] += $quantity;
                        $foundProduct = true;
                        break;
                    }
                }
                if (!$foundProduct) {
                    $this->selectedProducts[] = [
                        'product_id' => $product->id,
                        'name' => $product->name,
                        'quantity' => $quantity,
                        'price' => $product->price,
                    ];
                }

                foreach ($this->products as &$p) {
                    if ($p['id'] == $productId) {
                        $p['stock'] -= $quantity;
                        break;
                    }
                }

            }
            $this->quantity[$product['id']] = 0;

        }
    }

    public function removeSelectedProduct($productId)
    {
        foreach ($this->selectedProducts as $key => $selectedProduct) {
            if ($selectedProduct['product_id'] == $productId) {
                // Sumar la cantidad seleccionada al stock del producto correspondiente
                foreach ($this->products as &$product) {
                    if ($product['id'] == $productId) {
                        $product['stock'] += $selectedProduct['quantity'];
                        break;
                    }
                }
                // Eliminar el producto de la lista de productos seleccionados
                unset($this->selectedProducts[$key]);
                break;
            }
        }
    }



}
