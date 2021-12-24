<?php

namespace App\Http\Controllers\Admin;
use App\Models\CategoryExpense;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryExpenseController extends Controller
{
    //
    public function __construct(){

        $this->middleware('auth');
        $this->CategoryExpense = new CategoryExpense();
    }

    public function view_catexpense(){

         //mengambil data income
        $routeName = "CategoryExpense";
        $category_expense = CategoryExpense::all();
        //mengirim data expense ke view expense
        return view('admins.view_catexpense', compact('category_expense', 'routeName'));
    }
}
