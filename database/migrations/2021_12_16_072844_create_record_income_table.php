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
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('accounts')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('amount');
            $table->unsignedBigInteger('cat_income_id');
            $table->foreign('cat_income_id')->references('id')->on('category_income')->onDelete('cascade')->onUpdate('cascade');
            $table->date('date');
            $table->string('note');
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
