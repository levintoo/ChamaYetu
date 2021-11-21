<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOverdueLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('overdue_loans', function (Blueprint $table) {
            $table->id();
            $table->string('userid',100);
            $table->string('guarantor',100);
            $table->string('loanid',256);
            $table->BigInteger('initialamount')->unsigned();
            $table->BigInteger('pendingbalance')->unsigned();
            $table->BigInteger('balance')->unsigned();
            $table->date('due_at')->format('Y/m/d H:i:s')->nullable();
            $table->integer('status')->default('0')->comment('0 for defaulted 1 for cleared')->unsigned();
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
        Schema::dropIfExists('overdue_loans');
    }
}
