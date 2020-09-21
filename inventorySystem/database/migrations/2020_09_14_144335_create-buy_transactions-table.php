<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_transactions', function (Blueprint $table) {
             $table->id();
             $table->string('sName');
             $table->string('pName');
             $table->string('amount');
             $table->string('price');
             $table->string('totalPayment');
             $table->date('date');
             $table->foreign('sName')->references('supplierName')->on('suppliers');
            // $table->foreign('pName')->references('productName')->on('products');
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
        //
    }
}
