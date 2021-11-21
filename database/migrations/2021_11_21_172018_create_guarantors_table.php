<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuarantorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guarantors', function (Blueprint $table) {
            $table->id();
            $table->string('userid',100)->nullable();
            $table->BigInteger('guaranteedamount')->unsigned();
            $table->string('guaranteeduser',256);
            $table->date('requested_at')->format('Y/m/d H:i:s')->nullable();
            $table->date('approved_at')->format('Y/m/d H:i:s')->nullable();
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
        Schema::dropIfExists('guarantors');
    }
}
