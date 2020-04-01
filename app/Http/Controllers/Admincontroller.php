<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admins;
use Session;

class Admincontroller extends Controller
{
  public function Altaadmin()
   {

    $consulta= admins::orderby('idu','desc')
        ->take(1)
        ->get();
  $idsigue = $consulta[0]->idu+1;

    return view ('Altaadmin')
    ->with('idsigue',$idsigue);

  }


   public function Guardaadmin (Request $Request)
   {

  $idu = $Request->idu;
  $nombre=$Request->nombre;
  $apellido=$Request->apellido;
  $tipo=$Request->tipo;
  $correo=$Request->correo;
  $password=$Request->password;


  $this->validate($Request, [
   'archivo'=>'mimes:jpeg,png,jpg,gif', //mimes validar extensiones de achivos
  'nombre'=>'min:5|max:25|regex:/^[A-Z][A-Z,a-z, ]*$/',
  'apellido'=>'min:5|max:25|regex:/^[A-Z][A-Z,a-z, ]*$/',
  'tipo'=>['regex:/^[A-Z][A-Z,a-z,á,é,í,ó,ú]*$/'],
  'correo'=>'min:8|max:25|regex:/^[A-Z,a-z,0-9,@,.]*$/',
  'password'=>'min:7|max:12|regex:/^[A-Z,a-z, ,0-9]*$/']);

  $file = $Request->file('archivo'); //'archivo' la carperta creada en public
    if($file!="")
    {
      $ldate = date('Ymd_His_');//Year month day hours inuts second
      $img = $file->getClientOriginalName(); //
      $img2 = $ldate.$img; //guadar archivo concatenando la fecha y el nombre de la imagen
      \Storage::disk('local')->put($img2, \File::get($file));
    }else
    {
      $img2 = "nophoto.png";
    }

  $usu = new admins;

  $usu->idu = $Request->idu;
  $usu->archivo = $img2;
  $usu->nombre = $Request->nombre;
  $usu->apellido=$Request->apellido;
  $usu->tipo=$Request->tipo;
  $usu->correo=$Request->correo;
  $usu->password=$Request->password;
  $usu->activo='Si';

  $usu->save();

  $proceso = "Alta de administradores";
  $mensaje = "El admin ha sido registrado";
  return view ('mensaje')
  ->with('proceso',$proceso)
  ->with('mensaje',$mensaje);
   }
public function Reporteadmin()
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
  $consulta = \DB::select("SELECT idu,archivo,nombre,apellido,
              tipo,correo,password,activo FROM admins");
  //return $consulta;
  return view ('Reporteadmin')->with('consulta',$consulta);
   }
}
public function Modificaradmin ($idu)
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
  $usu= admins::where('idu',$idu)->get();
  return view('Modificaradmin')
  ->with('usu',$usu[0]);
  }
}
public function Guardaedicionadmin (Request $Request)
   {
    $idu = $Request->idu;
    $nombre=$Request->nombre;
    $apellido=$Request->apellido;
    $tipo=$Request->tipo;
    $correo=$Request->correo;
    $password=$Request->password;

    $this->validate($Request, [
      'archivo'=>'mimes:jpeg,png,jpg,gif', //mimes validar extensiones de achivos
      'nombre'=>'min:5|max:25|regex:/^[A-Z][A-Z,a-z, ]*$/',
      'apellido'=>'min:5|max:25|regex:/^[A-Z][A-Z,a-z, ]*$/',
      'tipo'=>['regex:/^[A-Z][A-Z,a-z,á,é,í,ó,ú]*$/'],
      'correo'=>'min:8|max:25|regex:/^[A-Z,a-z,0-9,@,.]*$/',
      'password'=>'min:7|max:12|regex:/^[A-Z,a-z, ,0-9]*$/']);

     $file = $Request->file('archivo'); //'archivo' la carperta creada en public
       if($file!="")
       {
         $ldate = date('Ymd_His_');//Year month day hours inuts second
         $img = $file->getClientOriginalName(); //
         $img2 = $ldate.$img; //guadar archivo concatenando la fecha y el nombre de la imagen
         \Storage::disk('local')->put($img2, \File::get($file));
       }

    $usu =admins::find($idu);
     if($file!="")
    {
      $usu->archivo =$img2;
    }
    $usu->idu = $Request->idu;
    $usu->nombre = $Request->nombre;
    $usu->apellido=$Request->apellido;
    $usu->tipo=$Request->tipo;
    $usu->correo=$Request->correo;
    $usu->password=$Request->password;

    $usu->save();

    $proceso = "Modificacion de usuario";
    $mensaje = "El admin $nombre ha sido modificado correctamente";
    return view ('mensaje')
    ->with('proceso',$proceso)
    ->with('mensaje',$mensaje);
}
  public function Borraadmin($idu)
   {
     /** --- Borrar permanentemente de la BD ---
     *pacientes::find($idu)->delete();
     *$proceso = "Eliminacion de Paciente ";
     *$mensaje = "El paciente con clave $idu ha sido eliminado";
        *return view ('mensaje_eliminado')
     *->with ('proceso',$proceso)
     *->with ('mensaje',$mensaje);
      */
     $activa = \DB:: UPDATE("update admins set activo = 'No' where idu = $idu");
     $proceso = "Desactivar usuario";
      $mensaje = "El admin $idu ha sido Desactivado correctamente";
      return view ('mensaje')
      ->with('proceso',$proceso)
      ->with('mensaje',$mensaje);
   }
   public function Restauraadmin($idu)
     {
       $activa = \DB:: UPDATE("update admins set activo = 'Si' where idu = $idu");
       $proceso = "Activar admin";
        $mensaje = "El admin $idu ha sido Activado correctamente";
        return view ('mensaje')
        ->with('proceso',$proceso)
        ->with('mensaje',$mensaje);
     }
  public function index2()
  {
    return view ('index2');
  }
}
