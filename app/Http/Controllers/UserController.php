<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('/user/user-dashboard');
    }
    public function store(Request $request)
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
    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'name' => 'required',
    //         'email' => 'required',
    //         'password' => 'required',
    //         'repassword' => 'required',
    //     ]);
    //     $register = new User;
    //     $register->name = $request->input('name');
    //     $register->email = $request->input('email');
    //     $register->password = $request->input('password');

    //     $register->save();
    //     return redirect('/')->with('sukses', 'data saved');
    // }
}
