<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('storePerson');
    }
}
