<?php

namespace App\Service;

use App\Models\Location as ModelsLocation;

Class Location
{
    public static function searchByName(string $name) : array
    {
        return ModelsLocation::where('name','like','%'. $name .'%')
                             ->get()
                             ->toArray();
    }
}