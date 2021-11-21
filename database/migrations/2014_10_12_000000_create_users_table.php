<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('userid',100)->nullable();
            $table->string('oficial_name',100)->nullable();
            $table->string('phone_number',100)->unique()->nullable();
            $table->string('national_id',100)->unique()->nullable();
            $table->date('dob')->format('Y/m/d')->nullable();
            $table->string('residence',255)->nullable();
            $table->bigInteger('walletbalance')->default(0);
            $table->bigInteger('lastadition')->nullable();
            $table->string('status',1)->default('0')->nullable()->comment('0 for created 1 for copleted 2 for deleted 3 for banned');
            //login details
            $table->string('utype')->default('USR')->comment('USR for user and ADM for admin and Sec for secretary');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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
        Schema::dropIfExists('users');
    }
}
