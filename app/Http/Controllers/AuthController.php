<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function authenticate(LoginRequest $request)
    {
        $data = $request->validated();

        if(!Auth::attempt($data)){
            $request->session()->flash("danger", "Hibás felhasználónév vagy jelszó");
            return redirect()->route("home");
        }
        return redirect()->route("home");
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route("home");
    }
}
