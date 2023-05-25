<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use ErrorException;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    public function index() {
        if (Auth::user()) {
            return response()->json([
                'data' => Auth::user()
            ]);
        }
        else {
            return response()->json([
                'data' => 'Harap Login Terlebih dahulu, atau Register',
                'status' => 401
            ], 401);
        }
    }
    public function register(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ]);

        if ($validate) {
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
        }

        return response()->json([
            'success' => false,
            'message' => "Registrasi Gagal"
        ], 409);
    }

    public function login(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt($validate, true)) {
            return response()->json([
                'success' => true,
                'message' => 'Login Successfully',
                'data' => Auth::user()
            ], 200)->cookie('user_id', Auth::id())->cookie('user_name', Auth::user()->name)->cookie('user_email', Auth::user()->email);
        }
        else {
            return response()->json([
                'data' => 'Failed',
                'success' => false,
                'errors' => 'Login Failed',
                'message' => 'Pastikan Email dan Password benar!'
            ]);
        }
    }
}
