<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LiveSearch extends Component
{
    public $name;

    public function render()
    {  
        return view('livewire.live-search');
    }
}
