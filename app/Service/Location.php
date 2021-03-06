<?php

namespace App\Service;

use App\Models\Location as ModelsLocation;

class Location
{
    public static function searchByName(string $name)
    {
        return ModelsLocation::where('name', 'like', $name)
            ->with('lockers')
            ->first();
    }
}
