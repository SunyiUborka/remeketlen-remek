<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        return User::all();
    }

    public function store(Request $request)
    {
        User::create($request->validated());
    }

    public function show($id)
    {
       
        return User::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        Gate::authorize("admin-role");
        User::update($request->validate());
    }

    public function destroy($id)
    {
        Gate::authorize("admin-role");
        User::delete($id);
    }
}
