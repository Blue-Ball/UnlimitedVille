<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class LoginController extends Controller
{
    public function index()
    {        
        $description = "Unlimitedville members sign in here. Not a member yet? Visit Unlimitedville.com to experience unlimited wireless high speed Internet.";
        return view('login.login',['title'=>'Login','description'=> $description ]);
    }

}
