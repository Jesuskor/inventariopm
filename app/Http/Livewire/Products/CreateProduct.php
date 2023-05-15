<?php

namespace App\Http\Livewire\Products;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProduct extends Component
{

    use WithFileUploads;

    public $open = false;
    public $identificador;
    public $categories;
    public $search = '';
    public $selectedCategory, $categoryInfo;
    public $name, $description, $price, $stock, $image, $category_id;

    protected $rules = [
        'name' => 'required|Unique:products,name',
        'description' => 'required',
        'price' => 'required|numeric',
        'stock' => 'required|numeric',
        'image' => 'image|max:2048',
        'category_id' => 'required_if:selectedCategory,null|numeric',
    ];

    public function messages()
    {
        return [
            'category_id.required_if' => 'Por favor seleccione una categoría.',
        ];
    }

    public function mount()
    {
        $this->identificador = rand();
        $this->categories = Category::all();
    }

    public function selectCategory($id)
    {
        $this->selectedCategory = Category::find($id);
        $this->categoryInfo = $this->selectedCategory->toArray();
        $this->category_id = $this->selectedCategory->id;
    }

    public function removeCategory()
    {
        $this->categoryInfo = false;
        $this->selectedCategory = null;
    }

    public function save()
    {
        $this->validate();

        $product = Product::create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'stock' => $this->stock,
            'image' => '',
            'category_id' => $this->category_id,
        ]);

        if ($this->image) {
            $imagePath = $this->image->store('public/products');
            $imageName = basename($imagePath);
            $product->setAttribute('image', 'products/'.$imageName);
            $product->save();
        }

        $this->reset(['open', 'name', 'description', 'price', 'stock', 'category_id', 'image']);
        $this->removeCategory();

        $this->identificador = rand();

        $this->emitTo('products.show-products', 'render');
        $this->emit('alert', 'El producto se creó con éxito');
    }

    public function render()
    {
        $this->categories = Category::where('name', 'like', '%' . $this->search . '%')->get();
        return view('livewire.products.create-product');
    }
}
