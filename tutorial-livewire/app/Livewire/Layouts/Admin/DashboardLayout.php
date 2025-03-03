<?php

namespace App\Livewire\Layouts\Admin;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class DashboardLayout extends Component
{
    public $username;

    public function mount()
    {
        $this->username = Session::get('username', 'guest');
    }

    public function render()
    {
        return view('livewire.layouts.admin.dashboard-layout');
    }
}
