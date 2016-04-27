<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operators', function (Blueprint $table) {
            $table->increments('id');
            
            $table->bigInteger('provider_id')->nullable();
            $table->string('account', 50);
            $table->string('password', 32);
            $table->string('fullname', 250);
            $table->string('email', 50)->nullable();
            $table->smallInteger('status')->default(0);
            $table->dateTime('last_login_at');
            
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
        Schema::drop('operators');
    }
}
