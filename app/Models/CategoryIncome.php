<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CategoryIncome extends Model
{
    use HasFactory;
    
    protected $table ="category_income";
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description'];

    public function addCatIncome($data){
        DB::table('category_income')->insert($data);
    }

    public function deleteData($id)
    {
        DB::table('category_income')->where('id', $id)->delete();
    }

    public function allData(){
        return DB::table('category_income')->get();
    }

    public function editData($id, $data)
    {
        DB::table('category_income')->where('id', $id)->update($data);
    }

}
