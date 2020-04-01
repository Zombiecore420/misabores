<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    protected $primaryKey = 'Clave_comentario';
    protected $fillable = ['Clave_comentario','estrella','aprobado','comentario',
							'activo'];
}
