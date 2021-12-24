<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function indexDashboardAdmin(){
        return view('admins.index');
    }
    public function dashboard(){
        $routeName = "Dashboard";
        return view('admins.index', compact('routeName'));
    }
}
