<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersDod extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers_dod', function (Blueprint $table) {
            $table->increments('id_answers_dod');
            $table->string('Surname');
            $table->string('Name');
            $table->string('Patronymic')->nullable();
            $table->string('city')->nullable();  
            $table->string('email');
            $table->string('phone');
            $table->json('date_of_dod');
            $table->string('insType');
            $table->string('official_name')->nullable();
            $table->integer('year_of_admission')->unsigned();
            $table->json('learn_dod')->nullable();
            $table->string('direction_of_study')->nullable();
            $table->string('intresting')->nullable();
            $table->string('question_to_employees')->nullable();            
            $table->json('learn_mpei')->nullable();
            $table->boolean('consent_of_personal_data'); //Согласие на рассылку
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
        Schema::dropIfExists('answers_dod');
    }
}
