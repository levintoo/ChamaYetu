<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->string('userid',100);
            $table->string('guarantor ',100);
            $table->string('loanid',256);
            $table->BigInteger('loanamount')->default('1')->unsigned();
            $table->BigInteger('paidamount')->nullable()->unsigned();
            $table->date('requested_at')->format('Y/m/d H:i:s')->nullable();
            $table->date('approved_at')->format('Y/m/d H:i:s')->nullable();
            $table->date('disbursed_at')->format('Y/m/d H:i:s')->nullable();
            $table->date('paid_at')->format('Y/m/d H:i:s')->nullable();
            $table->date('due_at')->format('Y/m/d H:i:s')->nullable();
            $table->integer('status')->default('0')->comment('0 for requested 1 for approved 2 for disbursed  3 rejected 4 for partially paid 5 for fully paid 6 for overdue 7 for defaulted')->unsigned();
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
        Schema::dropIfExists('loans');
    }
}
