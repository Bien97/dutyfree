<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
     // Page d’inscription
    public function registerForm()
    {
        return view('admin.auth.register');
    }

    // Traitement de l’inscription
    public function register(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:100',
            'lastname' => 'required|string|max:100',
            'pseudo' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:255|unique:users,telephone',
            'adresse' => 'nullable|string|max:255',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'pseudo' => $request->pseudo,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password),
            'adresse' => $request->adresse,
        ]);

        Auth::login($user);
        return redirect()->route('dashboard')->with('success', 'Bienvenue');
    }

    // Page de connexion
    public function loginForm()
    {
        return view('admin.auth.login');
    }

    // Traitement de la connexion
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'phone_number' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('phone_number', $credentials['phone_number'])->first();

        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            return back()->withErrors(['phone_number' => 'Identifiants incorrects']);
        }

        Auth::login($user);
        return redirect()->route('dashboard')->with('success', 'Connexion réussie.');
    }

    // Déconnexion
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Déconnexion réussie.');
    }
}
