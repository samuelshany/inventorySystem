<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
   
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('supplier_id');
            $table->string('productName');
            $table->string('productCat');
            $table->string('buyPrice');
            $table->string('sellPrice');
            $table->string('productDesc');
            $table->string('productAmount');
            $table->string('profit');
            $table->foreign('supplier_id')->references('id')->on('suppliers');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        //
    }
}
