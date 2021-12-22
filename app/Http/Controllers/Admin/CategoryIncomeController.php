<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryIncome;

class CategoryIncomeController extends Controller
{
    //
    public function __construct(){
        $this->CategoryIncome = new CategoryIncome();
    }

    public function view_catincome(){
        //mengambil data income
        $category_income = CategoryIncome::all();
        //mengirim data income ke vide income
        return view('admin.view_catincome', compact('category_income'));
    }
}