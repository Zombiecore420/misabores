<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Empleados extends Migration
{
  public function up()
  {
  Schema::create('empleados',function (Blueprint $table){
      $table->increments('Clave_empleado');
      $table->string('archivo');
      $table->string('nombre');
      $table->string('app');
      $table->string('apm');
      $table->string('Genero');
      $table->string('fechana');
      $table->string('tel');
      $table->string('calle');
      $table->string('Ncalle');
      $table->string('colonia');
      $table->string('municipo');
      $table->string('cp');
      $table->string('correo');
      $table->string('estado');
      $table->string('activo',2);

      $table->rememberToken();
      $table->timestamps();

    });

  }

  public function down()
  {
      Schema::drop('empleados');
  }
}
