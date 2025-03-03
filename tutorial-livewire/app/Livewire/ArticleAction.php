<?php

namespace App\Livewire;

use Livewire\Component;

class ArticleAction extends Component
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
        return view('livewire.article-action');
    }
}
