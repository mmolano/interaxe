<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{


    public function index(){

        return view('user.connexion');
    }



        public function store()
        {
            $this->validate(request(), [
                'email' => 'required|email',
                'password' => 'required'
            ]);


            return redirect()->to('/games');
        }




}
