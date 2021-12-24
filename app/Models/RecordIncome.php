<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class RecordIncome extends Model
{
    use HasFactory;

    protected $table ="record_income";
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'amount', 'cat_income_id', 'date', 'note'];

    public function addRecordIncome($data){
        DB::table('record_income')->insert($data);
    }

    public function deleteData($id)
    {
        DB::table('record_income')->where('id', $id)->delete();
    }

    public function allData(){
        return DB::table('record_income')->get();
    }

    public function editData($id, $data)
    {
        DB::table('record_income')->where('id', $id)->update($data);
    }
}
