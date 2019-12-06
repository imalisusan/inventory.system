<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->bigIncrements('Issue_Id');
            $table->unsignedInteger('Customer_Id');
            $table->foreign('Customer_Id') ->references('Customer_Id')->on('customers')->onDelete('cascade')->onUpdate('cascade');
            $table->string('Customer_Name');
            $table->unsignedInteger('Product_Id');
            $table->foreign('Product_Id') ->references('Product_Id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->string('Product_Name');
            $table->integer('Issue_Quantity');
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
        Schema::dropIfExists('issues');
    }
}
