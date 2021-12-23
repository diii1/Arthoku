<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function indexDashboardAdmin(){
        return view('clients.index');
    }
    public function dashboard(){
        $routName = "Dashboard";
        return view('clients.index', compact('routName'));
    }
}
