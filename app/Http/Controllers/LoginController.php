<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{


    public function index(){

        return view('user.connexion');
    }



        public function store(Request $request)
        {

                $this->validate($request, [
                    'email'   => 'required|email',
                    'password'  => 'required'
                ]);

                $user_data = array(
                    'email'  => $request->get('email'),
                    'password' => $request->get('password')
                );

                if(Auth::attempt($user_data))
                {
                    return redirect('/dashboard-co');
                }
                else
                {
                    return back()->with('error', 'Mauvais mail ou mot de passe!');
                }

        }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }


}
