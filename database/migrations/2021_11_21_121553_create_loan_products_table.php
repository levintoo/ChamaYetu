<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_products', function (Blueprint $table) {
            $table->id();
            $table->string('name',256);
            $table->string('loanid',256);
            $table->integer('max')->default('10000000')->unsigned();
            $table->BigInteger('min')->default('1')->unsigned();
            $table->BigInteger('intrestrate')->default('10')->unsigned();
            $table->integer('status')->default('1')->comment('1 for available 2 for unavailable')->unsigned();
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
        Schema::dropIfExists('loan_products');
    }
}
