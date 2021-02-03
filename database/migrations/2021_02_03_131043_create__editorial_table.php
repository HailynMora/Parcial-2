<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEditorialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Editorial', function (Blueprint $table) {
            $table->id(); // Llave primaria, autoincremental, unsigned, biginteger
            $table->string('nombre', 100);
            $table->string('direccion', 60);
            $table->string('ciudad', 30);
            $table->string('telefono', 30);
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
        Schema::dropIfExists('Editorial');
    }
}
