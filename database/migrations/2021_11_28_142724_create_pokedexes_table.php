<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokedexesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokedexes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('image');
            // $table->timestamp('added_at');
            $table->integer('hp');
            $table->integer('attack');
            $table->integer('defense');
            //$table->integer('speed');
            //$table->string('gender');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokedexes');
    }
}
