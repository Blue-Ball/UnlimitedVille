<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class CheckoutController extends Controller
{
    public function index()
    {        
        return view('checkout.checkout',['title'=>'Checkout','description'=>'']);
    }

}
