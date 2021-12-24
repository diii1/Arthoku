<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecordExpense extends Model
{
    use HasFactory;

    protected $table ="category_expense";
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description'];

    public function addCatIncome($data){
        DB::table('category_expense')->insert($data);
    }

    public function deleteData($id)
    {
        DB::table('category_expense')->where('id', $id)->delete();
    }

    public function allData(){
        return DB::table('category_expense')->get();
    }

    public function editData($id, $data)
    {
        DB::table('category_expense')->where('id', $id)->update($data);
    }
}
