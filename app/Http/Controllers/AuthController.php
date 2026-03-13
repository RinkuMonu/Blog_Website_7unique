<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginGet()
    {        
        if (Auth::check()) {
            return $this->redirectUserByRole(Auth::user());
        }
        $type = request()->is('admin*') ? 'Admin' : 'Author';
        return view('admin.auth.login', compact('type'));
    }

    public function login(Request $request)
    {        
        // 1. Validation zaroori hai
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $role = $request->is('admin/*') ? 1 : 3; 
        
        $credentials = [
            'email' => $request->email, 
            'password' => $request->password, 
            'role' => $role
        ];

        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate(); // Security ke liye zaroori
            
            // intended() ki jagah seedha role-based route par bhejte hain
            return $this->redirectUserByRole(Auth::user());
        }

        return back()->withErrors(['email' => 'Invalid credentials for this role.'])->withInput();
    }

    // Ek alag function redirect handle karne ke liye (Clean Code)
    private function redirectUserByRole($user)
    {
        if ($user->role == 1) {
            return redirect()->route('admin.dashboard');
        } elseif ($user->role == 3) {
            return redirect()->route('author.dashboard');
        }

        Auth::logout();
        return redirect('/')->withErrors(['msg' => 'Unauthorized role.']);
    }
}