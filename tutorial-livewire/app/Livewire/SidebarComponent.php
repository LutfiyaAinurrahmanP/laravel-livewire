<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class SidebarComponent extends Component
{
    public $username;

    public function mount()
    {
        $this->username = Session::get('username');
    }
    public function render()
    {
        return view('livewire.sidebar-component');
    }
}
