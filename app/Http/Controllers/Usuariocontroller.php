<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuarios;
use Session;

class Usuariocontroller extends Controller
{
  public function Altausuario(){
    $consulta= usuarios::orderby('Clave_usuario','desc')
        ->take(1)
        ->get();
  $idsigue = $consulta[0]->Clave_usuario+1;

    return view ('Altausuario')
    ->with('idsigue',$idsigue);

 }

  public function Guardausuario(Request $Request){
    $Clave_usuario = $Request->Clave_usuario;
    $nombre = $Request->nombre;
    $app_usu = $Request->app_usu;
    $apm_usu = $Request->apm_usu;
    $sex_usu = $Request->sex_usu;
    $tel_usu = $Request->tel_usu;
    $calle_usu = $Request->calle_usu;
    $ncalle_usu = $Request->ncalle_usu;
    $colonia_usu = $Request->colonia_usu;
    $municipio_usu = $Request->municipio_usu;
    $cp_usu = $Request->cp_usu;
    $estado_usu = $Request->estado_usu;


        $this->validate($Request,[
        
        'nombre'=>'min:5|max:25|regex:/^[A-Z][a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/',
        'app_usu'=>'min:5|max:15|regex:/^[A-Z][a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/',
        'apm_usu'=>'min:5|max:15|regex:/^[A-Z][a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/',
        'calle_usu'=>'min:5|max:15|regex:/^[A-Z][a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/', 
        'tel_usu'=>'min:7|max:10|required',
        'ncalle_usu'=>'min:2|max:3|required|',
        'colonia_usu'=>'min:5|max:25|regex:/^[A-Z][a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/',
        'municipio_usu'=>'min:5|max:15|regex:/^[A-Z][a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/',
        'cp_usu'=>'min:5|required|',
        'estado_usu'=>'min:5|max:25|regex:/^[A-Z][a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/'
        ]);

    $usu = new usuarios;
    $usu->Clave_usuario = $Request->Clave_usuario;
    $usu->nombre = $Request->nombre;
    $usu->app_usu = $Request->app_usu;
    $usu->apm_usu = $Request->apm_usu;
    $usu->sex_usu = $Request->sex_usu;
    $usu->tel_usu = $Request->tel_usu;
    $usu->calle_usu = $Request->calle_usu;
    $usu->ncalle_usu = $Request->ncalle_usu;
    $usu->colonia_usu = $Request->colonia_usu;
    $usu->municipio_usu = $Request->municipio_usu;
    $usu->cp_usu = $Request->cp_usu;
    $usu->estado_usu = $Request->estado_usu;
    $usu->activo='Si';

    $usu->save();

    $proceso = "Alta de usuarios";
    $mensaje = "El usuario ha sido registrado";
    return view ('mensaje')
    ->with('proceso',$proceso)
    ->with('mensaje',$mensaje);
    }
    public function Reporteusuario()
    {
        $sname = Session::get ('sesionname');
       $sidu = Session::get ('sesionidu');
       $stipo = Session::get ('sesiontipo');


       if($sname =='' or $sidu =='' or $stipo =='')
       {
         Session::flash('error', 'El usuario no existe o la contraseña no es correcta');
         return redirect ()->route('index');
       }
     else{
    $consulta =\DB::select("SELECT Clave_usuario,nombre,app_usu,apm_usu,sex_usu,tel_usu,
                            calle_usu,ncalle_usu,colonia_usu,municipio_usu,cp_usu,
                            estado_usu,activo FROM usuarios");

      return view ('Reporteusuario')->with('consulta',$consulta);
}
}
  public function Modificarusuario ($Clave_usuario)
  {
    $sname = Session::get('sesionname');
    $sidu = Session::get('sesionidu');
    $stipo = Session::get('sesiontipo');
    if($sname == '' or $sidu == '' or $stipo=='')
    {
      Session::flash('error','Es necesario loguearse antes de continuar');
      return redirect()->route('login');
    }
    else{
    $consulta = usuarios::where('Clave_usuario', '=',$Clave_usuario)->get();
      return view('Modificarusuario')
      ->with('consulta',$consulta[0]);
    }
  }
  public function Guardaedicionusuario (Request $Request)
{
  $Clave_usuario = $Request->Clave_usuario;
  $nombre = $Request->nombre;
  $app_usu = $Request->app_usu;
  $apm_usu = $Request->apm_usu;
  $sex_usu = $Request->sex_usu;
  $tel_usu = $Request->tel_usu;
  $calle_usu = $Request->calle_usu;
  $ncalle_usu = $Request->ncalle_usu;
  $colonia_usu = $Request->colonia_usu;
  $municipio_usu = $Request->municipio_usu;
  $cp_usu = $Request->cp_usu;
  $estado_usu = $Request->estado_usu;


      $this->validate($Request,[
      'archivo'=>'mimes:jpeg,png,jpg,gif', //mimes validar extensiones de achivos
      'nombre'=>'min:5|max:25|regex:/^[A-Z][a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/',
      'app_usu'=>'min:5|max:15|regex:/^[A-Z][a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/',
      'apm_usu'=>'min:5|max:15|regex:/^[A-Z][a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/',
      'calle_usu'=>'min:5|max:15|regex:/^[A-Z][a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/',
      'tel_usu'=>'min:7|max:10|required|',
      'ncalle_usu'=>'min:2|max:3|required|',
      'colonia_usu'=>'min:5|max:25|regex:/^[A-Z][a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/',
      'municipio_usu'=>'min:5|max:15|regex:/^[A-Z][a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/',
      'cp_usu'=>'min:5|required|',
      'estado_usu'=>'min:5|max:25|regex:/^[A-Z][a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/'
      ]);

  $usu = usuarios::find($Clave_usuario);
  $usu->Clave_usuario = $Request->Clave_usuario;
  $usu->nombre = $Request->nombre;
  $usu->app_usu = $Request->app_usu;
  $usu->apm_usu = $Request->apm_usu;
  $usu->sex_usu = $Request->sex_usu;
  $usu->tel_usu = $Request->tel_usu;
  $usu->calle_usu = $Request->calle_usu;
  $usu->ncalle_usu = $Request->ncalle_usu;
  $usu->colonia_usu = $Request->colonia_usu;
  $usu->municipio_usu = $Request->municipio_usu;
  $usu->cp_usu = $Request->cp_usu;
  $usu->estado_usu = $Request->estado_usu;

  $usu->save();

  $proceso = "Modificacion de usuarios";
  $mensaje = "El usuario ha sido modificado";
  return view ('mensaje')
  ->with('proceso',$proceso)
  ->with('mensaje',$mensaje);
}
  public function Borrausuario($Clave_usuario)
   {
      $activa = \DB:: UPDATE("update usuarios set activo = 'No' where Clave_usuario = $Clave_usuario");
      $proceso = "Desactivar usuario";
      $mensaje = "El usuario $Clave_usuario ha sido Desactivado correctamente";
      return view ('mensaje')
      ->with('proceso',$proceso)
      ->with('mensaje',$mensaje);
   }
  public function Restaurausuario($Clave_usuario)
   {

      $activa = \DB:: UPDATE("update usuarios set activo = 'Si' where Clave_usuario = $Clave_usuario");
      $proceso = "Activar usuario";
      $mensaje = "El usuario $Clave_usuario ha sido Activado correctamente";
      return view ('mensaje')
      ->with('proceso',$proceso)
      ->with('mensaje',$mensaje	);
   }
   public function index2()
   {
     return view ('index2');
   }
  }
