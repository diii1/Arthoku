<?php

namespace App\Http\Controllers\Client;
use App\Models\RecordIncome;
use App\Models\RecordExpense;
use App\Models\CategoryIncome;
use App\Models\CategoryExpense;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;


class DashboardClientController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->RecordIncome = new RecordIncome();
    }

    public function indexDashboardClient(){
        return view('clients.index');
    }
    
    public function viewDashboard(){
        $routeName = "Dashboard";
        return view('clients.dashboard', compact('routeName'));
    }

    public function viewHistoryIncome(){
        $id = Auth::id(); 
        $routeName = "History";
        $data = DB::table('record_income')->where('user_id', $id)->get(); 
        // $dataCategory = DB::table('category_income')->select('name')->where('id', $data->cat_income_id)->get(); 
        // $dataCategory = RecordIncome::with(['categoryIncome'])->first();

        // dd($dataCategory);
        return view('clients.historyIncome', compact('routeName', 'data'));
    }

    public function viewAddData(){
        $routeName = "AddData";
        $category_income = CategoryIncome::all();
        $category_expense = CategoryExpense::all();
        return view('clients.addData', compact('routeName', 'category_income', 'category_expense'));
    }

    public function viewRecommendation(){
        $routeName = "Recommendation";
        $avg_income = Auth::user()->avg_income;
        $needs = (50*$avg_income)/100;
        $wants = (30*$avg_income)/100;
        $savings = (20*$avg_income)/100;
        return view('clients.recommendation', compact('routeName','needs', 'wants', 'savings'));
    }

    
    public function viewSetting(){
        $routeName = "Setting";
        return view('clients.setting', compact('routeName'));
    }


}
