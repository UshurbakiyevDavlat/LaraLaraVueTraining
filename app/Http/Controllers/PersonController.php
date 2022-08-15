<?php

namespace App\Http\Controllers;

class PersonController extends Controller
{
    public function __invoke(): array
    {
        $persons = [
            [
                'id' => 1,
                'name' => 'Davlat',
                'age' => 22
            ],
            [
                'id' => 2,
                'name' => 'Davlat1',
                'age' => 23
            ],
            [
                'id' => 3,
                'name' => 'Davlat2',
                'age' => 18
            ],
        ];
        return $persons;
    }
}
