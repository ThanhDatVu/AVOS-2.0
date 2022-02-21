<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId("teacher_id")->constrained()->onDelete("cascade");
            $table->text("title");
            $table->text("descriptif")->nullable();
            $table->text("objectif")->nullable();
            $table->text("competences_requises")->nullable();
            $table->integer("niveau_de_difficulte");
            $table->string("image");
            $table->string("category")->nullable();
            //$table->json("mots_cle")->nullable();

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
        Schema::dropIfExists('cours');
    }
}
