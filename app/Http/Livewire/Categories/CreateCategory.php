<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class CreateCategory extends Component
{
    public $open = false;
    public $name, $identificador;

    public function mount()
    {
        $this->identificador = rand();
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|unique:categories,name',
        ]);

        Category::create([
            'name' => $this->name,
        ]);

        $this->reset(['open', 'name']);

        $this->identificador = rand();

        $this->emitTo('categories.show-categories', 'render');
        $this->emit('alert', 'La categoría se creó con éxito');
    }

    public function render()
    {
        return view('livewire.categories.create-category');
    }
}
