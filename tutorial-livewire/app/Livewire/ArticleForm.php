<?php

namespace App\Livewire;

use Livewire\Component;

class ArticleForm extends Component
{
    public $hobi = [];
    public $agama = '';
    public $jk = '';
    public $name = '';
    public $password = '';
    public $showPassword = false;
    public function render()
    {
        return view('livewire.article-form');
    }
}
