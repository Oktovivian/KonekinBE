<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthApiController extends Controller
{
    public function registerAudiens(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $phoneNumber = $request->input('phone_number');
    
        // validasi data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'phone_number' => 'required|min:10|max:13',
        ]);

        // make audiens as role 1
        $user = User::create([
            'name'=>$name,
            'email'=>$email,
            'password'=>bcrypt($password),
            'phone_number'=>$phoneNumber,
            'role_id'=>1,
        ]);
    }  // @request->input() for data input
   
        
    


}
