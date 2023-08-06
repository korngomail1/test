<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User; //
class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        $user = User::where('email', $request->Email)->first();
        if ($user && $user->Password === '1234') {
            // Password is correct, perform the login
            Auth::login($user);
            // Redirect to the authenticated user's dashboard or any other page
            return redirect()->intended('/');
        } else {
            // Password is incorrect, show an error message
            return redirect()->route('login')->with('error', 'Invalid credentials. Please try again.');
        }
    }
}
