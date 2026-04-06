<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {

            if (Auth::user()->role == 'admin') {
                return redirect('/admin/admin_add_cater');
            } else {
                return redirect('/staff/staff_dashboard');
            }

        }

        return back()->with('error', 'Invalid login');
    }
}