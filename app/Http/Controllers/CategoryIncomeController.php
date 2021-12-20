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

    public function insert(){
        $data = [
            'name' => Request()->name,
            'description' => Request()->description,
        ];
        // die($data);
        $this->CategoryIncome->addCatIncome($data);
        return redirect()->route('data_catincome')->with('pesan', 'Data Berhasil Ditambahkan');
    }

    public function delete($id){
        $this->CategoryIncome->deleteData($id);
        return redirect()->route('data_catincome')->with('pesan', 'Data Berhasil Dihapus');;
    }

    public function update($id)
    {
        $data = [
            'name' => Request()->name,
            'description' => Request()->description,
        
        ];

        $this->CategoryIncome->editData($id, $data);
        return redirect()->route('data_catincome')->with('pesan', 'Data Berhasil Terupdate');
    }
}
