<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

function ()
{
    return view('auth.login');
};

function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Authentifizierung erfolgreich
        return redirect()->intended('/');
    }

    // Authentifizierung fehlgeschlagen
    return back()->withErrors([
        'email' => 'Die angegebenen Anmeldeinformationen sind ungültig.',
    ]);
}