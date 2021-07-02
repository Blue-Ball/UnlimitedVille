<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class PlansController extends Controller
{
    public function index()
    {        
        $description= "Welcome to Unlimitedville, your home for mobile high-speed Internet. No contracts. No credit checks. No data limits. No throttling. 14-day money-back guarantee.";
        return view('plans.plans',['title'=>'Membership Plans','description'=>$description]);
    }

    public function showGuarantee(){
        $description= "Welcome to Unlimitedville, your home for mobile high-speed Internet. No contracts. No credit checks. No data limits. No throttling. 14-day money-back guarantee.";
        return view('plans.guarantee',['title'=>'Membership Plans','description'=>$description]);
    }

    public function showGuaranteeModal(){
        return view('plans.guarantee_modal');
    }

    public function showHelpMe(){
        $description= "Welcome to Unlimitedville, your home for mobile high-speed Internet. No contracts. No credit checks. No data limits. No throttling. 14-day money-back guarantee.";
        return view('plans.help_me_choose',['title'=>'Membership Plans','description'=>$description]);
    }

    public function showHelpMeModal(){
        return view('plans.help_me_choose_modal');
    }

    public function showMemberShipFee(){
        $description= "Welcome to Unlimitedville, your home for mobile high-speed Internet. No contracts. No credit checks. No data limits. No throttling. 14-day money-back guarantee.";
        return view('plans.membership_fee',['title'=>'Membership Plans','description'=>$description]);
    }

    public function showMemberShipFeeModal(){
        return view('plans.membership_fee_modal');
    }
}
