<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//panggil model income
use App\Models\CategoryIncome;
use App\Models\CategoryExpense;


class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.index');
    }

    public function view_catexpense(){
    

        //mengambil data expense
        $category_expense = CategoryExpense::all();

        //mengirim data expense ke view expense
        return view('admin.view_catexpense', ['category_expense'=>$category_expense]);

    }

    public function view_catincome(){
    

        //mengambil data income
        $category_income = CategoryIncome::all();

        //mengirim data income ke vide income
        return view('admin.view_catincome', ['category_income'=>$category_income]);

    }
}
