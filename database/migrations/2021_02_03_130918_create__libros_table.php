<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Libros', function (Blueprint $table) {
            $table->id();
            $table->string('ISBN',10);
            $table->string('titulo',200);
            $table->double('precio',8,2);
            $table->integer('stok');
            $table->bigInteger('editorial')->unsigned();
            $table->timestamps();
            $table->foreign('editorial')  //Creación de la llave foranea
                  ->references('id')
                  ->on('editorial')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Libros');
    }
}
