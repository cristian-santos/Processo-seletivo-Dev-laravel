<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Authcontroller extends Controller
{
    /**
     * 
     * Registrar usuário
     */
    public function registrar_usuario(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' =>'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        $usuario = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $token = $usuario->createToken('token')->plainTextToken;

        $response = [
            'usuario' => $usuario,
            'token' => $token
        ];

        return response($response, 200);
    }

    /**
     * 
     * Realizar login
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        $usuario = User::where('email', $request->email)->first();

        if(!$usuario || !Hash::check($request->password, $usuario->password)) {
            return response([
                'mensagem' => 'E-mail ou senha inválidos'
            ], 401);
        }
        
        $token = $usuario->createToken('token')->plainTextToken;

        $response = [
            'usuario' => $usuario,
            'token' => $token
        ];

        return response($response, 200);
    }

    /**
     * 
     * Realizar logout
     */
    public function logout()
    {
        auth()->usuario()->tokens()->delete();

        return [
            'mensagem' => 'Logout realizado com sucesso!'
        ];
    }
}
