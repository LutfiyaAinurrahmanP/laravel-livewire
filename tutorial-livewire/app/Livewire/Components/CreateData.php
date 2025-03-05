<?php

namespace App\Livewire\Components;

use App\Models\User;
use Livewire\Component;

class CreateData extends Component
{
    public $name;
    public $email;
    public $password;

    public function store()
    {
        $this->validate([
            'name' => 'required|string|regex:/^[A-Za-z\s]+$/',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);

        $this->reset(['name', 'email', 'password']);
        session()->flash('success', 'User berhasil dibuat');
    }

    public function render()
    {
        return view('livewire.components.create-data');
    }
}
