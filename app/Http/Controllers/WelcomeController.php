<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public Function __invoke()
    {
        return view('welcomeEcommerce');
        
    }
}
