<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        return view('authentification.login');
    }

    public function login(Request $request)
{
    $email = $request->input('email');
    $password = $request->input('password');
    if (
        ($email === 'docteur@gmail.com' && $password === '00000000') ||
        ($email === 'secretaire@gmail.com' && $password === '00000000')
    ) {

        return redirect('/Dashboard');
    }

    return back()->withErrors(['email' => 'Identifiants invalides']);
}
}
