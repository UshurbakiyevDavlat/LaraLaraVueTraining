<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Models\Person;

class PersonListController extends Controller
{
    public function __invoke()
    {
        return Person::all();
    }
}
