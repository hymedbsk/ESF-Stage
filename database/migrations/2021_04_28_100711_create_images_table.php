<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('images_id');
            $table->bigInteger('album_id')->unsigned();
            $table->string('image');
            $table->string('description');
            $table->foreign('album_id')->references('album_id')->on('albums')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->timestamp("date_cree");
            $table->timestamp("date_edit")->nullable();
            $table->timestamp("date_supp")->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
