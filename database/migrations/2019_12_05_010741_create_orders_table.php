<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('Order_Id');
            $table->integer('Customer_Id');
            $table->string('Customer_Name');
            $table->integer('Product_Id');
            $table->string('Product_Name');
            $table->integer('Order_Quantity');
            $table->timestamps();

            $table->foreign('Customer_Id')
      ->references('Customer_Id')->on('customers')
      ->onDelete('cascade');

            $table->foreign('Product_Id')
      ->references('Product_Id')->on('products')
      ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
