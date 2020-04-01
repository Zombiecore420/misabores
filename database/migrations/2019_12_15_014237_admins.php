<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Admins extends Migration
{
  public function up()
  {
  Schema::create('admins', function (Blueprint $table){
  $table->increments('idu');
  $table->string('archivo');
  $table->string('nombre',30);
  $table->string('apellido',30);
  $table->string('tipo',20);
  $table->string('correo',50);
  $table->string('password');
  $table->string('activo',2);

  $table->rememberToken();
  $table->timestamps();

  });
}

public function down()
{
    Schema::drop('admins');
}
}
