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

    public function insert(){
        $data = [
            'name' => Request()->name,
            'description' => Request()->description,
        ];
        // die($data);
        $this->CategoryExpense->addCatExpense($data);
        return redirect()->route('data_catexpense')->with('pesan', 'Data Berhasil Ditambahkan');
    }

    public function delete($id){
        $this->CategoryExpense->deleteData($id);
        return redirect()->route('data_catexpense')->with('pesan', 'Data Berhasil Dihapus');
    }

    public function update($id)
    {
        $data = [
            'name' => Request()->name,
            'description' => Request()->description,
        
        ];

        $this->CategoryExpense->editData($id, $data);
        return redirect()->route('data_catexpense')->with('pesan', 'Data Berhasil TerUpdate');
    }
}


