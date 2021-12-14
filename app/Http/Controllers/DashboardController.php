<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $routeName = "Dashboard";
        return view('dashboard', compact('routeName'));
    }

    public function addData(){
        return view('addData');
    }
}
