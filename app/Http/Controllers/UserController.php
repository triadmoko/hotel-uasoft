<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreBookRequest;
use App\Models\Book;

class UserController extends Controller
{
    public function index()
    {
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
            $request->get('remember');
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
    public function booking(Request $request)
    {
        $booking = Book::create([
            'user_id' => $request->user_id,
            'hotel_id' => $request->hotel_id,
            'room_id' => $request->room_id,
            'rooms_id' => $request->rooms_id,
            'date' => $request->date,
            'night' => $request->night,
            'room' => $request->room,
            'visitor' => $request->visitor,
            'total' => $request->total
        ]);

        return redirect('/user-dashboard/book');
    }
    public function room(Request $request)
    {
        $booking = Book::create([
            'hotel_id' => $request->hotel_id,
            'title' => $request->title,
            'price' => $request->price,
            'image' => $request->image,
        ]);

        return redirect('/user-dashboard/book');
    }
}
