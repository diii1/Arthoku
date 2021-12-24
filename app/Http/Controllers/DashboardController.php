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
        $routeName = "Add Data";
        return view('addData', compact('routeName'));
    }

    public function history(){
        $routeName = "History";
        return view('history', compact('routeName'));
    }

    public function recommendation(){
        $routeName = "Recommendation";
        return view('recommendation', compact('routeName'));
    }

    public function setting(){
        $routeName = "Setting";
        return view('setting', compact('routeName'));
    }
}
