<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordIncomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('record_income', function (Blueprint $table) {
            $table->id();
            $table->integer('amount');
            $table->date('date');
            $table->string('note');
        });
        
        Schema::table('record_income', function (Blueprint $table)
        {
            $table->integer('user_id')->unsigned();
            $table->integer('cat_income_id')->unsigned();
            $table->foreign(['user_id','cat_income_id'])->references(['id','id'])
                  ->on(['accounts','category_income'])->onDelete(['cascade','cascade'])->onUpdate(['cascade','cascade']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('record_income');
    }
}
