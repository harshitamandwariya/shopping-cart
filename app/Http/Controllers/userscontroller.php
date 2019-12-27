<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userscontroller extends Controller
{
    public function users(){
        return view('registration');
    }

    public function purchase(){
        return view('purchase');
    }

    public function faq(){
        return view('faq');
    }
}
