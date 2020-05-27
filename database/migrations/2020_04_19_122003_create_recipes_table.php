<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->integer('cooking_time');
            $table->integer('rating');
            $table->integer('level');
            $table->string('image')->nullable();
            $table->string('calories');
            $table->decimal('fat', 8, 2);
            $table->decimal('saturated_fat', 8, 2);
            $table->decimal('carbs', 8, 2);
            $table->decimal('sugar', 8, 2);
            $table->decimal('protein', 8, 2);
            $table->decimal('salt', 8, 2);
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
        Schema::dropIfExists('recipes');
    }
}
