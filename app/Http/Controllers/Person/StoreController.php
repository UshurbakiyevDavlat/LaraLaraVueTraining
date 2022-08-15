<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Http\Requests\PersonRequest;
use App\Models\Person;

class StoreController extends Controller
{
    public function __invoke(PersonRequest $person)
    {
        $data = $person->validated();

        $createdPerson = Person::create($data);
        return $createdPerson;
    }
}
