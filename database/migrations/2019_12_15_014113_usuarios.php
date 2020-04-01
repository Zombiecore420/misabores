<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuarios extends Migration
{
  public function up()
  {
  Schema::create ('usuarios',function (Blueprint $table){
      $table->increments('Clave_usuario');
      $table->string('nombre',20);
      $table->string('app_usu',20);
      $table->string('apm_usu',20);
      $table->string('sex_usu',10);
      $table->string('tel_usu',10);
      $table->string('calle_usu',30);
      $table->string('ncalle_usu',4);
      $table->string('colonia_usu',20);
      $table->string('municipio_usu',20);
      $table->string('cp_usu',5);
      $table->string('estado_usu',30);
      $table->string('activo',2);

      $table->rememberToken();
      $table->timestamps();
      });
  }

  public function down()
  {
    Schema::drop('usuarios');
  }
}
