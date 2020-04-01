<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admins extends Model
{
    protected $primaryKey = 'idu';
  protected $fillable=['idu','archivo','nombre','apellido','tipo','correo','password','activo'];

}
