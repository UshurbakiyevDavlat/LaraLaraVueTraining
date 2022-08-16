<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Http\Requests\PersonRequest;
use App\Models\Person;

class UpdateController extends Controller
{
    public function __invoke(PersonRequest $request, Person $person)
    {
        $data = $request->validated();
        $person->update($data);
        return $person;
    }
}
