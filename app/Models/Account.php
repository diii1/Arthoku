<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Account extends Model
{
    use HasFactory;

    protected $table ="accounts";
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'password'];

    public function addClient($data){
        DB::table('accounts')->insert($data);
    }

    public function deleteData($id)
    {
        DB::table('accounts')->where('id', $id)->delete();
    }

    public function allData(){
        return DB::table('accounts')->get();
    }

    public function editData($id, $data){
        return DB::table('accounts')->where('id', $id)->update($data);
    }

}
