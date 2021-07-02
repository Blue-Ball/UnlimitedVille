<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class SupportController extends Controller
{
    public function index()
    {        
        $description = 'Answers to your questions about Unlimitedville’s mobile hotsposts and unlimited data plans.';
        return view('support.support',['title'=>'Support &FAQ','description'=>$description]);
    }

}
