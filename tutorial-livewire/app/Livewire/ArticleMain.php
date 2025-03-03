<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class ArticleMain extends Component
{
    public $name;

    public function submit()
    {
        $this->validate([
            'name' => 'required|min:3'
        ]);

        Session::put('user_name', $this->name);

        return redirect('dashboard');
    }
    public function render()
    {
        return view('livewire.article-main');
    }
}
