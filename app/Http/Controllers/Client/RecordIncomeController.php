<?php

namespace App\Http\Controllers\Client;
use App\Models\RecordIncome;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class RecordIncomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->RecordIncome = new RecordIncome();
    }
    
    public function viewRecordIncome(){
        //mengambil data income
        $routeName = "RecordIncome";

        $record_income = RecordIncome::paginate(15);
        //mengirim data income ke vide income
        return view('clients.history_RecordIncome', compact('record_income', 'routeName'));
    }

    public function insert(){
        $id = Auth::id();
        $data = [
            'user_id' => $id,
            'amount' => Request()->amount,
            'cat_income_id' => Request()->cat_income_id,
            'date' => Request()->date,
            'note' => Request()->note,

        ];
        $this->RecordIncome->addRecordIncome($data);
        return redirect()->route('clientAddData')->with('pesanIncome', 'Data Berhasil Ditambahkan');
    }

    public function delete($id){
        $this->RecordIncome->deleteData($id);
        return redirect()->route('historyIncome')->with('pesan', 'Data Berhasil Dihapus');;
    }

    public function update($id)
    {   
        $id = Auth::id();
        $data = [
            'user_id' => $id,
            'amount' => Request()->amount,
            'cat_income_id' => Request()->cat_income_id,
            'date' => Request()->date,
            'note' => Request()->note,
        ];

        $this->RecordIncome->editData($id, $data);
        return redirect()->route('historyIncome')->with('pesan', 'Data Berhasil Terupdate');
    }

   
}
