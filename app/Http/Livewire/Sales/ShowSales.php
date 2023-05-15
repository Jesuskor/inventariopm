<?php

namespace App\Http\Livewire\Sales;

use App\Models\Customer;
use App\Models\Sale;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ShowSales extends Component
{

    use WithFileUploads;
    use WithPagination;

    public $search, $customer, $identificador;
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
        $this->sale = new Sale();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        if ($this->readyToLoad) {
            $sales = Sale::where('id', 'like', '%' . $this->search . '%')
                ->orWhereHas('customer', function ($query) {
                    $query->where('name', 'like', '%' . $this->search . '%');
                })
                ->orderBy($this->sort, $this->direction)
                ->paginate($this->cant);
        } else {
            $sales = [];
        }
        return view('livewire.sales.show-sales', compact('sales'));
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

}
