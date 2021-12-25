<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RecordExpense extends Model
{
    use HasFactory;

    protected $table ="record_expense";
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'amount', 'cat_expense_id', 'date', 'note'];

    public function addRecordExpense($data){
        DB::table('record_expense')->insert($data);
    }

    public function deleteData($id)
    {
        DB::table('record_expense')->where('id', $id)->delete();
    }

    public function allData(){
        return DB::table('record_expense')->get();
    }

    public function editData($id, $data)
    {
        DB::table('record_expense')->where('id', $id)->update($data);
    }
}
