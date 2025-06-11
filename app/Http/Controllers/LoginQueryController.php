<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginQueryController extends Controller
{
    public function showLogin() {
        return view('auth.login');
    }

    public function showRegister() {
        return view ('auth.register');
    }

    public function register(Request $request) {
        $request -> validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect ('/login')->with('berhasil','Registrasi berhasil');
    }

    public function login(Request $request) {
        $credentials = $request->only('email','password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->name === 'admin') {
                return redirect('/admin/structure/');
            }

            return redirect('/explore');
        }

        return back()->withErrors(['email' => 'Login gagal!']);  
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
