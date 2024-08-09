<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class LoginController extends Controller
{
    /**
     * index (function yang akan di panggil pertama kali ketika )
     * 
     * @param mixed
     * @return void
     */
    public function index(Request $request)
    {
        // Set validasi
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Response error validasi
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422); // perbaiki ini dari error() ke errors()
        }

        // Get 'email' dan 'password' dari input
        $credentials = $request->only('email', 'password');

        if (!$token = auth()->guard('api')->attempt($credentials)) {
            return response()->json([
                'success' => false,
                'message' => 'Email or password is incorrect'
            ], 400);
        }

        // Dapatkan informasi user
        $user = auth()->guard('api')->user();

        // Update status user menjadi 'online'
        $user->status = 'online';
        $user->save();

        // Ambil peran user
        $roles = $user->getRoleNames();

        return response()->json([
            'success' => true,
            'user_id' => $user->id, // Tambahkan user_id ke dalam respons
            'user' => $user->only(['name', 'email']),
            'permission' => $user->getPermissionArray(),
            'roles' => $roles,
            'token' => $token
        ], 200);
    }

    /**
     * logout
     * berfungsi untuk menghapus jwt token
     * @return void
     */
    public function logout(Request $request)
    {
        $user = Auth::user();
        $user->status = 'offline';
        $user->save();

        Auth::logout();

        return response()->json(['message' => 'Successfully logged out']);
    }
}
