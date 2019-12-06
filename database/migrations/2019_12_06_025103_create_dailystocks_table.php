<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailystocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dailystocks', function (Blueprint $table) {
            $table->bigIncrements('Entry_Id');
            $table->unsignedInteger('Employee_Id');
            $table->foreign('Employee_Id')->references('Employee_Id')->on('employees')->onDelete('cascade')->onUpdate('cascade');
            $table->string('Employee_Name');
            $table->unsignedInteger('Product_Id');
            $table->foreign('Product_Id')->references('Product_Id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->string('Product_Name');
            $table->integer('Entry_Quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dailystocks');
    }
}
