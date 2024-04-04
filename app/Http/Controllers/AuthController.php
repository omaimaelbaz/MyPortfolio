<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // auth user
public function register(Request $request)
{

    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique',
        'password' => 'required'
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password)
    ]);

    // If validation passes and user is successfully created
    if ($user) {
        return response()->json([
            'status' => true,
            'message' => 'User Created Successfully',
            'token' => $user->createToken("API TOKEN")->plainTextToken
        ], 200);
    } else {
        return response()->json([
            'status' => false,
            'message' => 'Failed to create user',
        ], 500);
    }
}

}
