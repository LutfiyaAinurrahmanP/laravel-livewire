<?php

namespace App\Livewire\Components;

use App\Models\User;
use Livewire\Component;

class TableData extends Component
{
    public function render()
    {
        return view('livewire.components.table-data', [
            'users' => User::orderBy('id', 'desc')->get()
        ]);
    }
}
