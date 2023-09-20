<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class MainController extends Controller
{
    public function index(Request $request)
    {
        return view("dashboard");
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return redirect()->back();

        // $user = User::where(["email" => $request->email, "password" => $request->password, "isActive" => 1]);
        // if ($user->count() > 0) {
        //     Auth::loginUsingId($user->first()->id);

        //     return redirect()->intended('/');
        // } else {
        //     return redirect()->back();
        // }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
