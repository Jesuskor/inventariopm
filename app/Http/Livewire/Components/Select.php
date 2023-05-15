<?php

namespace App\Http\Livewire\Components;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class Select extends Component
{
    public $categories = [], $products = [];
    public $selectedCategoryId, $selectedProductId;
    public $search, $selectedProducts = [], $product;

    protected $listeners = [
        'getProductsByCategoryId' => 'getProductsByCategoryId',
    ];

    public function mount()
    {
        $this->categories = Category::select('id', 'name')->get()->toArray();
    }

    public function hydrate()
    {
        $this->dispatchBrowserEvent('render-select2');
    }

    public function render()
    {
        return view('livewire.components.select', [
            'categories' => $this->categories,
        ]);
    }

    public function getProductsByCategoryId()
    {
        $this->products = Product::select('id', 'name', 'category_id')
            ->whereCategoryId($this->selectedCategoryId)
            ->get()
            ->toArray();

        $this->emit('productsSelected', $this->products);
    }

}
