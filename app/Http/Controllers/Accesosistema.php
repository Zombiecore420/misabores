<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admins;
use Session; //variables que se guardan en el navegador

class Accesosistema extends Controller
{
    public function login()
    {
        return view ('login');
    }
    public function valida(Request $request)//validacion
    {
		$correo = $request->correo;
		$password = $request->password;

	    $this->validate($request,[
        'correo'=>'required|email',
        'password'=>'required',
        ]);

        $consulta = admins::where('correo','=',$correo)
        ->where('password','=',$password)
        ->where('activo','=','Si')
        ->get();

      if (count($consulta)==0)
      { //crear una sesion de tipo flash que mandara un error y solo funciona una vez
        Session::flash('error','El usuario no existe o la contraseña no es correcta');
        return redirect()->route('login');
      }
      else
      {
        //sesiones que se crean en el navegador
        Session::put('sesionname',$consulta[0]->nombre);
        Session::put('sesionapellido',$consulta[0]->apellido);
        Session::put('sesionidu',$consulta[0]->idu);
        Session::put('sesiontipo',$consulta[0]->tipo);
        Session::put('sesioncorreo',$consulta[0]->correo);
        Session::put('sesionarchivo',$consulta[0]->archivo);

      return redirect()->route('index2');
      }
    }

    public function cerrarsesion()
    {
      Session::put('sesionname');
      Session::put('sesionidu');
      Session::put('sesiontipo');
      Session::flush();
      Session::flash('error','Session Cerrada Correctamente');
      return redirect()->route('index');
    }
}
