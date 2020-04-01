<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctores;
use App\Especialidades;

class Principalcontroller extends Controller
{
    public function principal()
  	{
  		return view ('principal');
  	}
	
	public function index()
  	{
  		return view ('index2');
  	}
	public function Contacto()
  	{
  		return view ('Contacto');
  	}
	public function Mision()
  	{
  		return view ('Mision');
  	}
	public function Vision()
  	{
  		return view ('Vision');
  	}
	public function Galeria()
  	{
  		return view ('Galeria');
  	}
	public function Nuestros_doctores()
  	{
		$consulta = \DB::select("SELECT d.Clave_doctor,d.archivo,d.Nombre_doctor,d.Apellido_paterno,
								d.Apellido_materno,d.Cedula,d.Sexo,d.Edad,d.Telefono,
								es.Nombre_especialidad AS especialidad,d.Correo,d.activo
								FROM doctores AS d INNER JOIN especialidades AS es
								ON es.Clave_especialidad = d.Clave_especialidad");
		//return $consulta;
  		return view ('Nuestros_doctores')->with('consulta',$consulta);
  	}
	
}
