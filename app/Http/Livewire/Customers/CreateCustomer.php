<?php

namespace App\Http\Livewire\Customers;

use App\Models\Customer;
use Livewire\Component;

class CreateCustomer extends Component
{
    public $open = false;
    public $name, $email, $phone, $address, $city, $identificador;

    public function mount()
    {
        $this->identificador = rand();
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|regex:/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})$/',
            'phone' => 'required|numeric',
            'address' => 'required',
            'city' => 'required',
        ]);

        Customer::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'city' => $this->city,
        ]);

        $this->reset(['open', 'name', 'email', 'phone', 'address', 'city']);

        $this->identificador = rand();

        $this->emitTo('customers.show-customers', 'render');
        $this->emit('alert', 'El cliente se creó con éxito');
    }

    public function render()
    {
        return view('livewire.customers.create-customer');
    }
}
