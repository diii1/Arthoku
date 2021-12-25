<?php

namespace App\Http\Controllers\Client;
use App\Models\RecordIncome;
use App\Models\RecordExpense;
use App\Models\CategoryIncome;
use App\Models\CategoryExpense;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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

    public function viewAddData(){
        $routeName = "AddData";
        $category_income = CategoryIncome::all();
        $category_expense = CategoryExpense::all();
        return view('clients.addData', compact('routeName', 'category_income', 'category_expense'));
    }

    public function viewRecommendation(){
        $routeName = "Recommendation";
        return view('clients.recommendation', compact('routeName'));
    }

    
    public function viewSetting(){
        $routeName = "Setting";
        return view('clients.setting', compact('routeName'));
    }
}
