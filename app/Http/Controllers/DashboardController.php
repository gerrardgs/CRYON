<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Show Dashboard Page For Customer
    public function index(){
        return view('user.dashboard');
    }
}