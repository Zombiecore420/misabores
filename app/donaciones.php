<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donaciones extends Model
{
    protected $primaryKey = 'Clave_donacion';
    protected $fillable = ['Clave_donacion','cantidad','fecha','Clave_usuario',
							'estado','activo'];
}
