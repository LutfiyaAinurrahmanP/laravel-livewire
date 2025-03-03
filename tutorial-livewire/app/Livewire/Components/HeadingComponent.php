<?php

namespace App\Livewire\Components;

use Livewire\Component;

class HeadingComponent extends Component
{
    public $article = 'Page';

    public function render()
    {
        return view('livewire.components.heading-component');
    }
}
