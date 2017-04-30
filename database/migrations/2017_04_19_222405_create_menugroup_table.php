<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenugroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menugroup', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',255);
            $table->integer('menuitem_id')->unsigned();
            $table->foreign('menuitem_id')->references('id')->on('menuitem')->onDelete('cascade');
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
        Schema::dropIfExists('menugroup');
    }
}
