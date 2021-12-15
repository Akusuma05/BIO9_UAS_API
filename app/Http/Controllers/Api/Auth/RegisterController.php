<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $user = $this->newUser($request->all());

        if(empty($user)){
            return response([
                'message' => 'Failed to create Account'
            ]);
        }else{
            return response([
                'message' => 'Success to create Account'
            ]);
        }
    }

    private function newUser(array $data){
        return User::create([
            'username' => $data['username'],
            'name' => $data['name'],
            'school' => $data['school'],
            'city' => $data['city'],
            'birthyear' => $data['birthyear'],
            'email' => $data['email'],
            'password'=> Hash::make($data['password']),
            'role'=>'admin',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
            
        ]);
    }
}
