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

    public function allData(){
        return DB::table('category_income')->get();
    }

}
