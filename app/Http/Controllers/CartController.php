<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class CartController extends Controller
{
    public function index()
    {        
        return view('cart.cart',['title'=>'Cart','description'=>'']);
    }


    public function add()
    {        
        echo "{token:'123132123'}";
    }
    

}
