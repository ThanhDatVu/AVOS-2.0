<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string("name")->default("Uncategorized");
            $table->timestamps();
        });
        Category::create([
            "name"=>"Uncategorized"
        ]);
        Category::create([
            "name"=>"Science"
        ]);
        Category::create([
            "name"=>"Data science"
        ]);
        Category::create([
            "nom"=>"Computer science"
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
