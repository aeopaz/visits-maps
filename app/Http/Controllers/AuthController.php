<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ]);
        if (!Auth::attempt(array('email' => $request->email, 'password' => $request->password))) {
            return response()->json([
                "message" => "Credenciales inválidas"
            ], 400);
        }

        $request->session()->regenerate();
        return response()->json([
            "message" => "Sesión iniciada"
        ], 200);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return response()->json([
            "message" => "Sesión cerrada"
        ], 200);
    }
}
