<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;


class  AccountController extends Controller
{
    //

    public function __construct(){
        $this->Account = new Account ();
    }

    public function view_client(){
        //mengambil data income
        $accounts = Account::all();
        //mengirim data income ke vide income
        return view('admin.view_client', compact('accounts'));
    }

    public function insert(){
        $data = [
            'name' => Request()->name,
            'email' => Request()->email,
            'password' => Request()->password,
        ];
        // die($data);
        $this->Account->addClient($data);
        return redirect()->route('client');
    }

    public function delete($id){
        $this->Account->deleteData($id);
        return redirect()->route('data_client')->with('pesan', 'Data Berhasil Dihapus');;
    }

    public function update($id)
    {
        $data = [
            'name' => Request()->name,
            'email' => Request()->email,
            'password' => Request()->password,
        ];

        $this->Account->editData($id, $data);
        return redirect()->route('data_client')->with('pesan', 'Data Berhasil Terupdate');
    }
 




    
}



