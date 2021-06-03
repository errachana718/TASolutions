<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyQuestionsAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_question_answer', function (Blueprint $table) {
            $table->id();
            $table->integer('survey_id')->unsigned();
            $table->integer('question_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('answer');
            $table->timestamps();

              // adding foreign key referecnes
            $table->foreign('survey_id', 'sqa_survey_id_fk')->references('id')
                ->on('survey');
            $table->foreign('question_id', 'sqa_question_id_fk')->references('id')
                ->on('questions');
            $table->foreign('user_id', 'sqa_user_id_fk')->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survey_question_answer');
    }
}
