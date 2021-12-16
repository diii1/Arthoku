<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordExpenseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('record_expense', function (Blueprint $table) {
            $table->id();
            $table->integer('amount');
            $table->date('date');
            $table->string('note');
        });

        Schema::table('record_income', function (Blueprint $table)
        {
            $table->integer('user_id')->unsigned();
            $table->integer('cat_expense_id')->unsigned();
            $table->foreign(['user_id','cat_expense_id'])->references(['id','id'])
                  ->on(['accounts','category_expense'])->onDelete(['cascade','cascade'])->onUpdate(['cascade','cascade']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('record_expense');
    }
}
