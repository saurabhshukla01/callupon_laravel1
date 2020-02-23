<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use saurabh_petition_db;


class Information extends Controller
{
    public function index(){
        return view('home');
    }

    public function about_us(){
        return view('about');
    }

    public function term_and_condition(){
        return view('Terms-service');
    }

    public function privacy_policy(){
        return view('privacy-policy');
    }

}
