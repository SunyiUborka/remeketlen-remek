<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view("auth.create");
    }

    public function store(RegisterStoreRequest $request)
    {
        
        $data = $request->validated();
        $data["password"] = Hash::make($data["password"]);
        User::create($data);
        $request->session()->flash("succes", "Sikeres regisztráció");

        return redirect()->route("home");
    }
}
