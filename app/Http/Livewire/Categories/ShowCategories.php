<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ShowCategories extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $search, $category, $identificador;
    public $sort = 'id';
    public $direction = 'desc';
    public $cant = '10';
    public $readyToLoad = false;

    public $open_edit = false;

    protected $listeners = ['render', 'delete'];

    protected $queryString = [
        'search' => ['except' => ''],
        'sort' => ['except' => 'id'],
        'direction' => ['except' => 'desc'],
        'cant' => ['except' => '10'],
    ];

    public function mount()
    {
        $this->identificador = rand();
        $this->category = new Category();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected $rules = [
        'category.name' => 'required',
    ];

    public function render()
    {
        if ($this->readyToLoad) {
            $categories = Category::where('name', 'like', '%' . $this->search . '%')
                ->orderBy($this->sort, $this->direction)
                ->paginate($this->cant);
        } else {
            $categories = [];
        }

        return view('livewire.categories.show-categories', compact('categories'));
    }

    public function loadPost()
    {
        $this->readyToLoad = true;
    }

    public function order($sort)
    {
        if ($this->sort == $sort) {
            if ($this->direction == 'desc') {
                $this->direction = 'asc';
            } else {
                $this->direction = 'desc';
            }
        } else {
            $this->sort = $sort;
            $this->direction = 'desc';
        }
    }

    public function edit(Category $category)
    {
        $this->category = $category;
        $this->open_edit = true;
    }

    public function update()
    {
        $this->validate();

        $this->category->save();

        $this->reset('open_edit');

        $this->identificador = rand();

        $this->emit('alert', 'La categoría se actualizó con éxito');
    }

    public function delete(Category $category)
    {
        $category->delete();

        $this->resetPage();

        $this->emit('alert', 'La categoría se eliminó con éxito');
    }
}
