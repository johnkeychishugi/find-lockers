<?php

namespace App\Http\Livewire;

use App\Service\Location;
use Livewire\Component;

class LiveSearch extends Component
{
    public $name;
	public $location = [];
	public $loading = false;

    public function updatedName($value)
    {
        if(!empty($this->name)){
			sleep(1);
			
			$results = $this->location = Location::searchByName($value);

			if(empty($results)){
				session()->flash('message','No location matching '.$this->name. '.');
			}

		    $this->location = $results;
		}	
    }

    public function render()
    {  
        return view('livewire.live-search');
    }
}
