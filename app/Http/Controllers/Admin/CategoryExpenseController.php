<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryExpense;

class CategoryExpenseController extends Controller
{
    //
    public function __construct(){
        $this->CategoryExpense = new CategoryExpense();
    }

    public function view_catexpense(){
        //mengambil data expense
        $category_expense = CategoryExpense::all();
        //mengirim data expense ke view expense
        return view('admin.view_catexpense', compact('category_expense'));
    }
}