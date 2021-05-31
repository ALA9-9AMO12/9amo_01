<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Artikel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();

        Schema::create('artikel', function (Blueprint $table) {
            $table->id('artikelID')->autoIncrement();
            $table->string('titel')->nullable(false);
            $table->string('content');
            $table->binary('afbeelding');
            $table->foreignId('gebruikerID')->references('gebruikerID')->on('gebruikers');
            $table->foreignId('paginaID')->references('paginaID')->on('paginas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikel');
    }
}
