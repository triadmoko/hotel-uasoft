<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }
    public function register(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => ['required', 'unique:users', 'email:dns'],
            'password' => ['required', 'min:5', 'max:255'],
        ]);
        $validateData['password'] = bcrypt($validateData['password']);
        User::Create($validateData);

        return redirect('/')->with('sukses', 'Registration Succsessfull!');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/user-dashboard');
        }
        return back()->with('loginFailed', 'Login Failed!');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
