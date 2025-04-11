<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RestApiController extends Controller
{
    public function signup(Request $request){
        $request->validate([
            'nama_pengguna' => 'required',
            'password' => 'required',
        ]);

        //if user not found
        $user = User::where('username', $request->nama_pengguna)->first();
        if(!$user || !Hash::check($request->password, $user->password)){
            return response()->json([
                'status' => 'error',
                'message' => 'Password or username is incorrect',
            ], 401);
        }
        
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'status' => 'success',
            'message' => 'User logged in successfully',
            'user' => $user,
            'token' => $token,
        ], 201);
    }
}
