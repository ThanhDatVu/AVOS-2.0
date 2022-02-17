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
            $table->bigInteger('created_by')->unsigned();
            $table->string("question");
            $table->string("answerA");
            $table->string("answerB");
            $table->string("answerC");
            $table->string("answerD");
            $table->string("correctAnswer");

            $table->string("hint")->nullable();
            $table->integer("mark")->default(1);
            $table->string("explanation")->nullable();
            $table->bigInteger('exam_id')->unsigned()->index();

            $table->timestamps();
            $table->softDeletes()->index();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('exam_id')->references('id')->on('exams')->onDelete('cascade');
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
