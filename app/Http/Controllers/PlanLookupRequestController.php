<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class PlanLookupRequestController extends Controller
{
    public function index()
    {        
        return view('plan_lookup_request.plan_lookup_request',['title'=>'Plan Lookup Request','description'=>'']);
    }

    public function showModal()
    {        
        return view('plan_lookup_request.plan_lookup_request_modal',['title'=>'Plan Lookup Request','description'=>'']);
    }

}
