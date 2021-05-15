<?php

namespace App\Service;

use App\Models\Location as ModelsLocation;

Class Location
{
    public static function searchByName(string $name) : array
    {
         dd(ModelsLocation::where('name','like',$name)
                             ->with('lockers')
                             ->get()
                             ->toArray());
    }
}