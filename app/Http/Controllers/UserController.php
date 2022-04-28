<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Program;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Providers\AuthServiceProvider;

class UserController extends Controller
{

    public function index()
    {
        return User::all();
    }

    public function store(UserRequest $request)
    {
        $adat = $request->validated();

        $fileimage = $adat['user_image']->store('user_images');

        $adat['user_image'] = $fileimage;

        User::create($adat);
    }

    public function show($id)
    {
       
        return User::findOrFail($id);
    }

    public function update(UserRequest $user)
    {
        Gate::authorize("admin-role");
        User::update($user->validated());
    }

    public function destroy($id)
    {
        Gate::authorize("admin-role");
        User::delete($id);
    }

    public function create_images(){

    }
    public function store_images(){

    }
}
