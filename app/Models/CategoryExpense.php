<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryExpense extends Model
{
    use HasFactory;

    
    protected $table ="category_expense";
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description'];

    public function addCatIncome($data){
        DB::table('category_expense')->insert($data);
    }

}
