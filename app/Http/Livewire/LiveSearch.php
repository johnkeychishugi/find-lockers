<?php

namespace App\Http\Livewire;

use App\Service\Location;
use Livewire\Component;

class LiveSearch extends Component
{
    public $name;

    public function render()
    {  
        return view('livewire.live-search',[
           'contacts' =>  Location::searchByName('e')
        ]);
    }
}
