<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->increments('id');
            
            $table->bigInteger('provider_id')->nullable();
            $table->string('title', 500);
            $table->text('content')->nullable();
            $table->string('image', 250);
            $table->string('survey_code', 32);
            $table->smallInteger('status')->default(0);
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->smallInteger('re_surveyable')->default(0);
            
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
        Schema::drop('surveys');
    }
}
