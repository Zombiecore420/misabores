<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class restaurantes extends Model
{
    protected $primaryKey = 'Clave_restaurante';
    protected $fillable = ['Clave_restaurante','nombre','tel','calle','Ncalle',
							'colonia','municipio','cp','correo',
							'estado','activo'];
}
