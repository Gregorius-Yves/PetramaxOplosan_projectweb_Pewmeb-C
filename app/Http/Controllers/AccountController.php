<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function destroy(Request $request)
    {
        $user = Auth::user();

        // Optional: logout first
        Auth::logout();

        // Delete the user
        $user->delete();

        return redirect('/')->with('status', 'Akun berhasil dihapus.');
    }
}
