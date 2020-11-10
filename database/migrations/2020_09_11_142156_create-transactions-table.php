<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
           $table->id();
           $table->unsignedBigInteger('client_id');
            
            $table->string('pName');
            $table->string('amount');
            $table->string('price');
            $table->string('profit');
            $table->date('date');
            $table->foreign('client_id')->references('id')->on('clients');
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
