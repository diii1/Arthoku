<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class SettingController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->User = new User();
    }

    public function updateName($id){
        $id = Auth::id();
        $data = [
            'id' => $id,
            'name' => Request()->name
        ];

        $this->User->updateName($id, $data);
        return redirect()->route('clientSetting');
    }

    public function updateAverage($id){
        $id = Auth::id();
        $data = [
            'id' => $id,
            'avg_income' => Request()->avg_income
        ];

        $this->User->updateAverage($id, $data);
        return redirect()->route('clientSetting');
    }
}
