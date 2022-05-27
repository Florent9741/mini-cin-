<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('films', function (Blueprint $table) {
            $table->unsignedBigInteger('id_salle');
            $table->foreign('id_salle')->references('id')->on('salles');
            $table->unsignedBigInteger('id_realisateur');
            $table->foreign('id_realisateur')->references('id')->on('realisateurs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
