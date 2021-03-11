<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePsiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psy', function (Blueprint $table) {
            $table->id("psy_id");
            $table->string("nom",200);
            $table->string("prenom",200);
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
        Schema::dropIfExists('psies');
    }
}
