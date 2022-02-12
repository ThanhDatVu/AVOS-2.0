<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('coursed_id')->unsigned();
            $table->string('title');
            $table->text("description")->nullable();
            $table->unsignedTinyInteger('number_of_questions')->default(0);
            $table->json('meta')->nullable();
            $table->timestamps();


            $table->foreign('coursed_id')->references('id')->on('courses')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam');
    }
}
