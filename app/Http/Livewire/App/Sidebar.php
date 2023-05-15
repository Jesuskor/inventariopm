<?php

namespace App\Http\Livewire\App;

use Livewire\Component;

class Sidebar extends Component
{
    public $isSidebarOpen = true;

    public function toggleSidebar()
    {
        $this->isSidebarOpen = !$this->isSidebarOpen;
    }

    public function render()
    {
        return view('livewire.app.sidebar')->layout('layouts.prueba');
    }
}
