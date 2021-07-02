<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class PasswordController extends Controller
{
    public function index()
    {        
        return view('password.reset',['title'=>'Reset Password','description'=> '' ]);
    }

    public function show($page = 'reset')
    {   
        if($page == "reset"){
            $title = "Reset Password";
        }else{
            $title = "Email";
        }
        return view('password.'.$page, ['title'=>$title,'description'=> '' ]);
    }

}
