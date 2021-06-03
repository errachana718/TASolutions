<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_questions', function (Blueprint $table) {
            $table->id();
            $table->integer('survey_id')->unsigned();
            $table->integer('question_id')->unsigned();
            $table->timestamps();

            // adding foreign key referecnes
            $table->foreign('survey_id', 'sq_survey_id_fk')->references('id')
                ->on('survey');
            $table->foreign('question_id', 'sq_question_id_fk')->references('id')
                ->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survey_questions');
    }
}
