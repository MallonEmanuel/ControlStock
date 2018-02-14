<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo',50)->required()->unique();
            $table->string('descripcion',100)->required()->unique();
            $table->integer('stock')->required();
            $table->integer('stock_minimo')->required();
            $table->double('costo')->nullable();
            $table->double('precio')->required();
            $table->enum('unidad_medida', ['unidad', 'kg', 'litro', 'cm3', 'g', 'mg']);
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
        Schema::dropIfExists('articulos');
    }
}
