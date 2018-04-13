<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }
}
