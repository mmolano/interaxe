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
            'nbr_indice' => 'required',
            'password' => 'required'
        ]);


        $user = User::create(request(['name','nbr_indice', 'familyname', 'email', 'password']));

        auth()->login($user);
        return redirect()->to('/dashboard-co');


    }
}
