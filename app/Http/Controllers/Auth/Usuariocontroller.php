<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;
use Session;

class Usuariocontroller extends Controller
{
  public function Altausuarios()
   {
    
    $consulta= usuarios::orderby('idu','desc')
        ->take(1)
        ->get();
  $idsigue = $consulta[0]->idu+1;

    return view ('Altausuarios')
    ->with('idsigue',$idsigue);
    
  }


   public function Guardausuarios (Request $Request)
   {

  $idu = $Request->idu;
  $nombre=$Request->nombre;
  $apellido=$Request->apellido;
  $tipo=$Request->tipo;
  $correo=$Request->correo;
  $password=$Request->password;


  $this->validate($Request, [
   'archivo'=>'mimes:jpeg,png,jpg,gif', //mimes validar extensiones de achivos
  'nombre'=>['regex:/^[A-Z][A-Z,a-z,á,é,í,ó,ú, ]*$/'],
  'apellido'=>['regex:/^[A-Z][A-Z,a-z,á,é,í,ó,ú]*$/'],
  'tipo'=>['regex:/^[A-Z][A-Z,a-z,á,é,í,ó,ú]*$/'],
  'correo'=>'required|email',
  'password'=>['regex:/^[A-Z,0-9,a-z,á,é,í,ó,ú]*$/']]);

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

  $usu = new usuarios;

  $usu->idu = $Request->idu;
  $usu->archivo = $img2;
  $usu->nombre = $Request->nombre;
  $usu->apellido=$Request->apellido;
  $usu->tipo=$Request->tipo;
  $usu->correo=$Request->correo;
  $usu->password=$Request->password;
  $usu->activo='Si';

  $usu->save();

  $proceso_usuario = "Alta de usuario";
  $mensaje_usuario = "El usuario ha sido registrado";
  return view ('mensaje_usuario')
  ->with('proceso_usuario',$proceso_usuario)
  ->with('mensaje_usuario',$mensaje_usuario);
   }
public function Reporteusuarios()
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
              tipo,correo,password,activo FROM usuarios");
  //return $consulta;
  return view ('Reporteusuarios')->with('consulta',$consulta);
   }
}
public function Modificarusuario ($idu)
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
  $usu= usuarios::where('idu',$idu)->get();
  return view('Modificarusuario')
  ->with('usu',$usu[0]);
  }
}
public function Guardaedicionusuario (Request $Request)
   {
    $idu = $Request->idu;
    $nombre=$Request->nombre;
    $apellido=$Request->apellido;
    $tipo=$Request->tipo;
    $correo=$Request->correo;
    $password=$Request->password;

    $this->validate($Request, [
      'archivo'=>'mimes:jpeg,png,jpg,gif', //mimes validar extensiones de achivos
    'nombre'=>['regex:/^[A-Z][A-Z,a-z,á,é,í,ó,ú, ]*$/'],
    'apellido'=>['regex:/^[A-Z][A-Z,a-z,á,é,í,ó,ú]*$/'],
    'tipo'=>['regex:/^[A-Z][A-Z,a-z,á,é,í,ó,ú]*$/'],
    'correo'=>'required|email',
    'password'=>['regex:/^[A-Z,0-9,a-z,á,é,í,ó,ú]*$/']]);

     $file = $Request->file('archivo'); //'archivo' la carperta creada en public
       if($file!="")
       {
         $ldate = date('Ymd_His_');//Year month day hours inuts second
         $img = $file->getClientOriginalName(); //
         $img2 = $ldate.$img; //guadar archivo concatenando la fecha y el nombre de la imagen
         \Storage::disk('local')->put($img2, \File::get($file));
       }

    $usu =usuarios::find($idu);
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

    $proceso_usuario = "Modificacion de usuario";
    $mensaje_usuario = "El usuario $nombre ha sido modificado correctamente";
    return view ('mensaje_usuario')
    ->with('proceso_usuario',$proceso_usuario)
    ->with('mensaje_usuario',$mensaje_usuario);
}
  public function Borrausuario($idu)
   {
     /** --- Borrar permanentemente de la BD ---
     *pacientes::find($idu)->delete();
     *$proceso = "Eliminacion de Paciente ";
     *$mensaje = "El paciente con clave $idu ha sido eliminado";
        *return view ('mensaje_usuario_eliminado')
     *->with ('proceso',$proceso)
     *->with ('mensaje',$mensaje);
      */
     $activa = \DB:: UPDATE("update usuarios set activo = 'No' where idu = $idu");
     $proceso_usuario = "Desactivar usuario";
      $mensaje_usuario = "El usuario $idu ha sido Desactivado correctamente";
      return view ('mensaje_usuario')
      ->with('proceso_usuario',$proceso_usuario)
      ->with('mensaje_usuario',$mensaje_usuario);
   }
   public function Restaurausuario($idu)
     {
       $activa = \DB:: UPDATE("update usuarios set activo = 'Si' where idu = $idu");
       $proceso_usuario = "Activar usuario";
        $mensaje_usuario = "El usuario $idu ha sido Activado correctamente";
        return view ('mensaje_usuario')
        ->with('proceso_usuario',$proceso_usuario)
        ->with('mensaje_usuario',$mensaje_usuario);
     }
  public function index2()
  {
    return view ('index2');
  }
}
