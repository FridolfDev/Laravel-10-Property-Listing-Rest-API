<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUseRrequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    use HttpResponses;
    public function register (StoreUserRequest $request)
    {
        $request -> validated();
        $user = User::query()->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return $this->success([
            'user' => $user,
            'token' => $user -> createToken('API Token Of '. $user->name)->plainTextToken
        ]);
    }

    public function login (LoginUseRrequest $request)
    {
        $request->validated();
        if (! Auth::attempt($request->only(['email', 'password'])))
        {
            return $this->error('', 'Credentials are not match', 401);
        }

        $user = User::query()->where('email', $request->email)->first();

        return $this->success([
            'user' => $user,
            'token' => $user->createToken ('API Token')->plainTextToken
        ]);
    }

    public function logout ()
    {
        Auth::user()->currentAccessToken()->delete();
        return $this -> success('', 'You Successfully been logout');
    }
}
