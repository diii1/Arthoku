<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->User = new User();
    }

    public function view_user(){

        //mengambil data Expense
       $routeName = "User";
       $users = User::paginate(15)->where('isAdmin', '==', 0);
       //mengirim data expense ke view expense
       return view('admins.view_users', compact('users', 'routeName'));
   }

    public function delete($id){
        $this->User->deleteData($id);
        return redirect()->route('adminUser')->with('pesan', 'Data Berhasil Dihapus');;
    }

    public function update($id)
    {
        
        $data = [
            'isAdmin' => 1,
        ];
        $this->User->updateAdmin($id, $data);
        return redirect()->route('adminUser')->with('pesan', 'Berhasil Dirubah Sebagai Admin');
    }
}
