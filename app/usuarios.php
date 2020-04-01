<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    protected $primaryKey = 'Clave_usuario';
    protected $fillable = ['Clave_usuario','nombre','app_usu','apm_usu','sex_usu',
							'tel_usu','calle_usu','ncalle_usu','colonia_usu',
							'municipio_usu','cp_usu','estado_usu','activo'];
}
