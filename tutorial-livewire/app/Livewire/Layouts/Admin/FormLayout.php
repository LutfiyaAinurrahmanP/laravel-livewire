<?php

namespace App\Livewire\Layouts\Admin;

use Livewire\Component;

class FormLayout extends Component
{
    public $hobi = [];
    public $agama = '';
    public $jk = '';
    public $name = '';
    public $password = '';
    public $showPassword = false;
    public $article;


    public function render()
    {
        return view('livewire.layouts.admin.form-layout');
    }
}
