<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//panggil model income
use App\Models\CategoryIncome;


class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.index');
    }

    public function add_catincome(){
    

        //mengambil data income
        $category_income = CategoryIncome::all();

        //mengirim data income ke vide income
        return view('admin.add_catincome', ['category_income'=>$category_income]);

    }
}
