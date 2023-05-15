<?php

namespace App\Http\Livewire\Customers;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ShowCustomers extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $search, $customer, $identificador;
    public $sort = 'id';
    public $direction = 'desc';
    public $cant = '10';
    public $readyToLoad = true; // Por defecto estaba false

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
        $this->customer = new Customer();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected $rules = [
        'customer.name' => 'required',
        'customer.email' => 'required|email',
        'customer.phone' => 'required|numeric',
        'customer.address' => 'required',
        'customer.city' => 'required',
    ];

    public function render()
    {
        if ($this->readyToLoad) {
            $customers = Customer::where('name', 'like', '%' . $this->search . '%')
                ->orWhere('email', 'like', '%' . $this->search . '%')
                ->orWhere('phone', 'like', '%' . $this->search . '%')
                ->orWhere('address', 'like', '%' . $this->search . '%')
                ->orWhere('city', 'like', '%' . $this->search . '%')
                ->orderBy($this->sort, $this->direction)
                ->paginate($this->cant);
        } else {
            $customers = [];
        }

        return view('livewire.customers.show-customers', compact('customers'));
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

    public function edit(Customer $customer)
    {
        $this->customer = $customer;
        $this->open_edit = true;
    }

    public function update()
    {

        $this->validate([
            'customer.name' => 'required',
            'customer.email' => 'required|email',
            'customer.phone' => 'required|numeric',
            'customer.address' => 'required',
            'customer.city' => 'required',
        ]);

        $this->customer->save();

        $this->reset('open_edit');

        $this->identificador = rand();

        $this->emit('alert', 'El cliente se actualizó con éxito');
    }

    public function delete(Customer $customer)
    {

        $customer->sales()->delete(); // Eliminar ventas relacionadas

        $customer->delete();

        $this->resetPage();

        $this->emit('alert', 'El cliente se eliminó con éxito');
    }
}
