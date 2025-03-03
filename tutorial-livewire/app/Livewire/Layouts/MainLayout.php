<?php

namespace App\Livewire\Layouts;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class MainLayout extends Component
{
    public $name;

    public function submit()
    {
        $this->validate([
            'name' => ['required', 'string', 'regex:/^[A-Za-z\s]+$/']
        ]);

        Session::put('user_name', $this->name);

        return redirect('dashboard');
    }

    public function render()
    {
        return view('livewire.layouts.main-layout');
    }
}
