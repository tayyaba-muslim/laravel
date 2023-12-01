<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class form extends Controller
{
    public function register(){
        return view('registration');
    }
}
