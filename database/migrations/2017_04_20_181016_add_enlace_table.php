<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEnlaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('section', function (Blueprint $table) {
            $table->string('enlace1title',60);
            $table->string('enlace1url',255);
            $table->string('enlace2title',60);
            $table->string('enlace2url',255);
            $table->string('enlace3title',60);
            $table->string('enlace3url',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('section', function (Blueprint $table) {
            $table->string('enlace1title',60);
            $table->string('enlace1url',255);
            $table->string('enlace2title',60);
            $table->string('enlace2url',255);
            $table->string('enlace3title',60);
            $table->string('enlace3url',255);
        });
    }
}
