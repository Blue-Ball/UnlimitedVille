<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class ReviewsController extends Controller
{
    public function index()
    {       
        $description = "Find out what others are saying about Unlimitedville’s wireless, high speed, unthrottled Internet plans."; 
        return view('reviews.reviews',['title'=>'Reviews','description'=>$description]);
    }

}
