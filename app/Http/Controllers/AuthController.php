<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('backend.auth.login');
    }
    public function adminLogin(Request $request)
    {
        // Validate login data
        $credentials = $request->only('email', 'password');

        // Custom authentication logic
        if ($this->customAuthenticate($credentials)) {
            // Authentication successful, store authentication information in session
            $request->session()->put('authenticated', true);

            // Redirect to dashboard or any other route
            return redirect('/dashboard');
        } else {
            // Authentication failed
            return back()->withErrors(['email' => 'Invalid credentials']);
        }
    }

    private function customAuthenticate(array $credentials)
    {
        // Implement your custom authentication logic here
        // For example, check if the user exists with the provided credentials
        $user = Admin::where('email', $credentials['email'])->first();

        if ($user && password_verify($credentials['password'], $user->password)) {
            // Authentication successful
            return true;
        }

        // Authentication failed
        return false;
    }

    public function dashboard() {
        return view('backend.dashboard');
    }
}
