<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Donaciones extends Migration
{
  public function up()
  {
  Schema::create('donaciones', function (Blueprint $table){
  $table->increments('Clave_donacion');
  $table->integer('cantidad');
  $table->string('fecha');
  $table->integer('Clave_usuario')->unsigned();
  $table->foreign('Clave_usuario')->references('Clave_usuario')->on('usuarios');
  $table->string('estado');
  $table->string('activo',2);

  $table->rememberToken();
  $table->timestamps();
});
}


public function down()
{
Schema::drop('donaciones');
}
}
