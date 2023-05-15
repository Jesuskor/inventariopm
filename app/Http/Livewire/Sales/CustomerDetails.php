<?php

namespace App\Http\Livewire\Sales;

use App\Models\Customer;
use Livewire\Component;

class CustomerDetails extends Component
{
    public $customer;
    public $sales;

    public function mount($id)
    {
        $this->customer = Customer::findOrFail($id);
        $this->sales = $this->customer->sales;
    }

    public function render()
    {
        return view('livewire.sales.customer-details', [
            'customer' => $this->customer,
            'sales' => $this->sales,
        ]);
    }
}
