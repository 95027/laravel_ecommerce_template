<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SanctumAuthController extends Controller
{
    public function register(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = $user->createToken('app')->plainTextToken;

        return response()->json(['message' => 'user registered successfully', 'token' => $token]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only(['email', 'password']);

        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'un authorized'], 401);
        }

        $user = Auth::user();

        $token = $user->createToken('app')->plainTextToken;

        return response()->json(['message' => 'user login successfully', 'token' => $token]);
    }

    public function getUserByToken(Request $request)
    {
        return response()->json(['user' => $request->user()]);
    }
}
