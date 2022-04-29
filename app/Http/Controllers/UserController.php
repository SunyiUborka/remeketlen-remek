<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePasswordRequest;
use App\Http\Requests\UpdateUserImageRequest;
use App\Http\Requests\UserRequest;
use App\Models\Program;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Providers\AuthServiceProvider;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        return User::all();
    }

    public function show($id)
    {
       
        return User::findOrFail($id);
    }

    public function updateImage(UpdateUserImageRequest $request)
    {
        $data = $request->validated();
        $fileimage = $data['user_image']->store('user_image');
        $data['user_image'] = $fileimage;

        Auth::user()->update($data);
        return redirect()->back();
    }

    public function updatePassword(UpdatePasswordRequest $request)
    {
        $data = $request->validated();
        if (!Hash::check($data['old_password'], Auth::user()->getAuthPassword())){
            $request->session()->flash('bad_password', 'Hibás a jelenlegi jelszó!');
            return redirect()->back();
        }
        $data['password'] = Hash::make($data['password']);
        Auth::user()->update($data);
        return redirect()->back();
    }

    public function destroy($id)
    {
        Gate::authorize("admin-role");
        User::delete($id);
    }
}
