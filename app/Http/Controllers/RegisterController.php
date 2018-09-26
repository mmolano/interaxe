<?php

namespace App\Http\Controllers;



use App\User;


class RegisterController extends Controller
{


    public function create(){
        return view('layouts.register');
    }


    public function keep()
    {
        $this->validate(request(), [
            'name' => 'required',
            'familyname' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ]);


        $user = User::create(request(['name', 'familyname', 'email', 'password']));

        auth()->login($user);
        return redirect()->to('/dashboard-co');


    }
}
