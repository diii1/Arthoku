<?php

namespace App\Http\Controllers\Admin;
use App\Models\CategoryExpense;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryExpenseController extends Controller
{
    //
    public function __construct(){

        $this->middleware('auth');
        $this->CategoryExpense = new CategoryExpense();
    }

    public function view_catexpense(){

         //mengambil data Expense
        $routeName = "CategoryExpense";
        $category_expense = CategoryExpense::paginate(15);
        //mengirim data expense ke view expense
        return view('admins.view_catexpense', compact('category_expense', 'routeName'));
    }

    public function insert(){
        $data = [
            'name' => Request()->name,
            'description' => Request()->description,
        ];
        // die($this->CategoryExpense);
        $this->CategoryExpense->addCatExpense($data);
        return redirect()->route('adminExpense')->with('pesan', 'Data Berhasil Ditambahkan');
    }

    public function delete($id){
        $this->CategoryExpense->deleteData($id);
        return redirect()->route('adminExpense')->with('pesan', 'Data Berhasil Dihapus');;
    }

    public function update($id)
    {
        $data = [
            'name' => Request()->name,
            'description' => Request()->description,
        
        ];

        $this->CategoryExpense->editData($id, $data);
        return redirect()->route('adminExpense')->with('pesan', 'Data Berhasil Terupdate');
    }
}
