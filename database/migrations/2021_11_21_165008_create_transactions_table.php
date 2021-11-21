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
            $table->string('userid',100);
            $table->string('type',100)->comment('1 for debit 2 for credit');
            $table->decimal('amount',9,3);
            $table->string('purpose',256)->comment('saving,loan payment,shares,loan repayment,utility');
            $table->string('source',100)->comment('1 for wallet 2 mpesa 3 paypal');
            $table->string('transactioncode',256);
            $table->date('transacted_at')->format('Y/m/d H:i:s');
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
        Schema::dropIfExists('transactions');
    }
}
