<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    private $token_name;

    public function login(Request $request)
    {
        $this->token_name = $request['email'] . '_' . now()->timestamp;
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            return $request->user()->createToken($this->token_name)->plainTextToken;
        } else {
            return response()->json([
                'message' => 'The provided credentials do not match our records.',
            ], 401);
        }
    }
}
