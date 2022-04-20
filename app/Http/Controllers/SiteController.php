<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class SiteController extends Controller
{


    public function index()
    {
 
        return view('welcome');
    }

// fv  



public function home() 

{
    Gate::authorize("create-belep" , "Az oldalt csak belépett felhasználók tekinthetik meg");
return view('dosarch.home');

}

}

