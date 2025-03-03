<?php

namespace App\Livewire\Layouts\Admin;

use Livewire\Component;

class ActionLayout extends Component
{
    public $count = 0;
    public $message = '';
    public function tambah()
    {
        $this->count++;
        $this->message = 'tambah';
    }

    public function kurang()
    {
        $this->count--;
        $this->message = 'kurang';
    }

    public function render()
    {
        return view('livewire.layouts.admin.action-layout');
    }
}
