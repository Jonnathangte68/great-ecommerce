<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSectionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->increments('id');
            $table->text('mensaje');
            $table->string('titulo');
            $table->string('tipo');
            $table->string('imagen');
            $table->string('colorfondo');
            $table->string('showestatus');
            $table->string('enlace1title');
            $table->string('enlace2url');
            $table->string('enlace1url');
            $table->string('enlace2title');
            $table->string('enlace3title');
            $table->string('enlace3url');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sections');
    }
}
