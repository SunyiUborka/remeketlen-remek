<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Providers\AuthServiceProvider;

class SiteController extends Controller
{
    public function index()
    {
        return view('dosarc.home');
    }

    public function home()
    {
        Gate::authorize("create-belep" , "Az oldalt csak belépett felhasználók tekinthetik meg");
        return view('dosarc.home');
    }

    public function show(Program $program) {
        Gate::authorize("create-belep" , "Az oldalt csak belépett felhasználók tekinthetik meg");
        return view('dosarc.show', [
            'data' => $program,
            'title' => $program['name']
        ]);
    }

    public function upload() {
        Gate::authorize("create-belep" , "Az oldalt csak belépett felhasználók tekinthetik meg");
        return view('dosarc.upload');
    }

    public function forum() {
        Gate::authorize("create-belep" , "Az oldalt csak belépett felhasználók tekinthetik meg");
        return view('dosarc.forum');
    }

    public function profile() {
        Gate::authorize("create-belep" , "Az oldalt csak belépett felhasználók tekinthetik meg");
        return view('dosarc.profile');
    }
}

