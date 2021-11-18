<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('oficial_name',100)->default()->nullable();
            $table->string('phone_number',100)->unique()->nullable();
            $table->string('national_id',100)->unique()->nullable();
            $table->date('dob')->format('Y/m/d')->nullable();
            $table->string('residence',255)->nullable();
            $table->string('status',1)->default('0')->nullable()->comment('0 for created 1 for copleted 2 for deleted 3 for banned');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
