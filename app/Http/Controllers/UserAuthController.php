<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class UserAuthController extends Controller
{
    function showLoginForm(Request $request) {
        return view('pages.admin.login');
    }

    function login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin/panel')
                ->withSuccess('You have Successfully loggedin!!');
        }

        return redirect("admin/login")->withError('Oppes! Invalid credentials');
    }
    function logout(Request $request) {
        session::flush();
        Auth::logout();

        return redirect('admin/login');
    }

    function showAdminPanel(Request $request) {
        return view('pages.admin.panel');
    }
}
