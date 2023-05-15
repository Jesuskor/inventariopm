<?php

namespace App\Http\Livewire\Sales;

use App\Models\Product;
use App\Models\Sale;
use Livewire\Component;

class SaleDetails extends Component
{
    public $sale;
    public $products;

    public function mount($id)
    {
        $this->sale = Sale::find($id);
        $this->products = $this->sale->products;
    }

    public function removeProduct($productId)
    {
        $product = Product::find($productId);

        // Verifica si el producto existe en la venta
        if (!$this->sale->products->contains($product)) {
            return;
        }

        // Obtiene la cantidad de productos en la venta
        $quantity = $this->sale->products()->where('product_id', $productId)->first()->pivot->quantity;

        // Elimina el producto de la venta
        $this->sale->products()->detach($product);

        // Incrementa el stock del producto eliminado
        $product->stock += $quantity;
        $product->save();

        $this->products = $this->sale->products;

        // Actualiza la lista de productos
        $this->products = $this->sale->products()->get();
    }

    public function render()
    {
        return view('livewire.sales.sale-details');
    }

}
