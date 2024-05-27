<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Throwable;

class UsersController extends Controller
{
    public function register(Request $req){
        $valid = validator()->make($req->all(), [
            "name" => "required",
            "email" => "required|email",
            "password" => "required|confirmed|min:3|max:20"
        ]);

        if ($valid->fails()) {
            $response = [
                'success' => false,
                'data' => null,
                'message' => $valid->errors()
            ];
            return response()->json([$response, 401]);
        }

        $req->merge(['password' => Hash::make($req->password)]);

        $user = User::create($req->all());

        $response = [
            'success' => true,
            'data' => $user,
            'message' => 'User Registered Successfully'
        ];

        return response()->json([$response, 200]);
    }

    public function login(Request $req){
        try {
            $validate = validator()->make($req->all(), [
                'email' => 'required|email',
                'password' => 'required|min:3|max:10'
            ]);

            if ($validate->fails()) {
                $response = [
                    'success' => false,
                    'data' => null,
                    'message' => $validate->errors()
                ];
                return response()->json([$response, 401]);
            }

            $credentials = $req->only('email', 'password');
            if (!Auth::attempt($credentials)) {
                $response = [
                    'success' => false,
                    'data' => null,
                    'message' => "Email or Password is not correct"
                ];
                return response()->json([ $response,  401]);
            }

            $user = User::where('email', $req->email)->first();

            if (!$user || !Hash::check($req->password, $user->password)) {
                $response = [
                    'success' => false,
                    'data' => null,
                    'message' => 'Credentials are Not Valid'
                ];
            }

            $response = [
                'success' => true,
                'data' => $user,
                'token' => $user->createToken("API TOKEN")->plainTextToken,
                'message' => 'User Logged In Successfully'
            ];
            return response()->json([$response, 200]);
        } catch (Throwable $th) {
            $response = [
                'success' => false,
                'data' => null,
                'message' => $th->getMessage()
            ];
            return response()->json([$response, 500]);
        }
    }
}
