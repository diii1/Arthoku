<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardClientController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function indexDashboardClient(){
        return view('clients.index');
    }
    
    public function viewDashboard(){
        $routeName = "Dashboard";
        return view('clients.dashboard', compact('routeName'));
    }

    public function viewHistory(){
        $routeName = "History";
        return view('clients.history', compact('routeName'));
    }
}
