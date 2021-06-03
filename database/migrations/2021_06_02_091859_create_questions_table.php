<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->integer('question_type_id')->unsigned();
            $table->string('title',200);
            $table->string('name',200);
            $table->tinyInteger('isValidate');
            $table->string('validation',200);
            $table->timestamps();

            $table->foreign('question_type_id', 'qt_qtype_id_fk')->references('id')
                ->on('question_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
