<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    public function index() {
        return response()->json([
            'data' => 'Hello World'
        ]);
    }
    public function register(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->save();

        if ($user) {
            return response()->json([
                'success' => true,
                'message' => 'Registrasi Berhasil',
                'user' => $user
            ], 201);
        }

        return response()->json([
            'success' => false,
            'message' => "Registrasi Gagal"
        ], 409);
    }
}
