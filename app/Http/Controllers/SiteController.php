<?php

namespace App\Http\Controllers;

use App\Models\Program;
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


    public function show($id) {
        Gate::authorize("create-belep" , "Az oldalt csak belépett felhasználók tekinthetik meg");
        return view('dosarch.show');
    }

    public function upload() {
        Gate::authorize("create-belep" , "Az oldalt csak belépett felhasználók tekinthetik meg");
        return view('dosarch.upload');
    }

    public function forum() {
        Gate::authorize("create-belep" , "Az oldalt csak belépett felhasználók tekinthetik meg");
        return view('dosarch.forum');
    }


    public function datasheet() {
        Gate::authorize("create-belep" , "Az oldalt csak belépett felhasználók tekinthetik meg");
        return view('dosarch.datasheet');

    }


}

