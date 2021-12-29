<?php

namespace App\Http\Controllers\Client;
use App\Models\RecordExpense;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;

class RecordExpenseController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
        $this->RecordExpense = new RecordExpense();
    }
    
    public function viewRecordExpense(){
        //mengambil data Expense
        $routeName = "RecordExpense";

        $record_expense = RecordExpense::paginate(15);
        //mengirim data Expense ke vide Expense
        return view('clients.history_RecordExpense', compact('record_expense', 'routeName'));
    }

    public function insert(){
        $id = Auth::id();
        $data = [
            'user_id' => $id,
            'amount' => Request()->amount,
            'cat_expense_id' => Request()->cat_expense_id,
            'date' => Request()->date,
            'note' => Request()->note,

        ];
        $this->RecordExpense->addRecordExpense($data);
        return redirect()->route('clientAddData')->withSuccess('Expense added!');
    }

    public function delete($id){
        $this->RecordExpense->deleteData($id);
        return redirect()->route('clientHistoryExpense')->withSuccess('Expense deleted!');
    }

    public function update($id)
    {   
        $idUser = Auth::id();
        $data = [
            'user_id' => $idUser,
            'amount' => Request()->amount,
            'cat_expense_id' => Request()->cat_expense_id,
            'date' => Request()->date,
            'note' => Request()->note,
        ];

        $this->RecordExpense->editData($id, $data);
        return redirect()->route('clientHistoryExpense')->withSuccess('Expense updated!');
    }
}
