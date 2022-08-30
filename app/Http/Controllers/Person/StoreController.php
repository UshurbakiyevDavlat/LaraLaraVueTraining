<?php

namespace App\Http\Controllers\Person;

use App\Events\PersonCreationEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\PersonRequest;
use App\Models\Person;

class StoreController extends Controller
{
    public function __invoke(PersonRequest $person)
    {
        $data = $person->validated();

        $createdPerson = Person::create($data);
        event(new PersonCreationEvent($createdPerson));

        return $createdPerson;
    }
}
