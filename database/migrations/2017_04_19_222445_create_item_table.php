<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',60);
            $table->string('link',255);
            $table->integer('menuitem_id')->unsigned();
            $table->integer('group_id')->unsigned();
            $table->foreign('menuitem_id')->references('id')->on('menuitem')->onDelete('cascade');
            $table->foreign('group_id')->references('id')->on('menugroup')->onDelete('cascade');
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
        Schema::dropIfExists('item');
    }
}
