<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $this->UserAuthCheck();
        return view('user.dashboard');
    }


    /**
     * @return \Illuminate\Http\RedirectResponse|void
     */
    public function UserAuthCheck(){

        if (Auth::check())
        {
            return;
        }else{
            return Redirect::to('/')->send();
        }
    }

}
