<?php

namespace App\Http\Controllers\Admin;
use App\Models\CategoryIncome;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryIncomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->CategoryIncome = new CategoryIncome();
    }
    public function view_catincome(){
        //mengambil data income
        $routeName = "CategoryIncome";

        $category_income = CategoryIncome::paginate(15);
        //mengirim data income ke vide income
        return view('admins.view_catincome', compact('category_income', 'routeName'));
    }

    public function insert(){
        $data = [
            'name' => Request()->name,
            'description' => Request()->description,
        ];
        // die($this->CategoryIncome);
        $this->CategoryIncome->addCatIncome($data);
        return redirect()->route('adminIncome')->with('pesan', 'Data Berhasil Ditambahkan');
    }

    public function delete($id){
        $this->CategoryIncome->deleteData($id);
        return redirect()->route('adminIncome')->with('pesan', 'Data Berhasil Dihapus');;
    }

    public function update($id)
    {
        $data = [
            'name' => Request()->name,
            'description' => Request()->description,
        
        ];

        $this->CategoryIncome->editData($id, $data);
        return redirect()->route('adminIncome')->with('pesan', 'Data Berhasil Terupdate');
    }
}
