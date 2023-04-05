<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    public function index()
    {
        $person = Person::all();
        return view('data', ['dataPerson' => $person]);
    }
}
