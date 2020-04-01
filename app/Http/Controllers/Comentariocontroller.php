<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentarios;

use Session; 

class Comentariocontroller extends Controller
{
  public function Altacomentario(){
    $consulta= Comentarios::orderby('Clave_comentario','desc')
        ->take(1)
        ->get();
  $idsigue = $consulta[0]->Clave_comentario+1;
    return view ('Altacomentario')
    ->with('idsigue',$idsigue);
    

 }

  public function Guardacomentario(Request $Request){

    $Clave_comentario = $Request->Clave_comentario;
    $estrella = $Request->estrella;
    $aprobado = $Request->aprobado;
    $comentario = $Request->comentario;

    

        $this->validate($Request,[
         //mimes validar extensiones de achivos
        'estrella'=>'min:1|required|',
        'aprobado'=>'min:2|regex:/^[A-Z][a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/',
        ]);

        

    $com = new Comentarios;
    $com->Clave_comentario = $Request->Clave_comentario;
    $com->estrella = $Request->estrella;
    $com->aprobado = $Request->aprobado;
    $com->comentario = $Request->comentario;
    $com->save();

    $proceso = "Alta de Comentario";
    $mensaje = "El comentario ha sido registrado";
    return view ('mensaje')
    ->with('proceso',$proceso)
    ->with('mensaje',$mensaje);
    }
    public function Reportecomentario()
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
    $consulta =\DB::select("SELECT c.Clave_comentario,c.estrella,c.aprobado,c.comentario
                FROM comentarios as c");

      return view ('Reportecomentario')->with('consulta',$consulta);
}
}
 public function Modificarcomentario ($Clave_comentario)
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
    $consulta = Comentarios::where('Clave_comentario', '=',$Clave_comentario)->get();

      return view('Modificarcomentario')
      ->with('consulta',$consulta[0]);
    }
  }  
  public function Guardaedicioncomentario (Request $Request)
{

  $Clave_comentario = $Request->Clave_comentario;
  $estrella = $Request->estrella;
  $aprobado = $Request->aprobado;
  $comentario = $Request->comentario;
  

      $this->validate($Request,[
     //mimes validar extensiones de achivos
      'estrella'=>'min:1|required|',
      'aprobado'=>'min:2|regex:/^[A-Z][a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/',
      ]);

      
  $com->Clave_comentario = $Request->Clave_comentario;
  $com->estrella = $Request->estrella;
  $com->aprobado = $Request->aprobado;
  $com->comentario = $Request->comentario;
  $com->save();

  $proceso = "Modificacion de Comentarios"; //borrar y enviar un redirect route dirige una ruta que ejecuta una funcion 
  $mensaje = "El Comentario ha sido modificado";
  return view ('mensaje')
  ->with('proceso',$proceso)
  ->with('mensaje',$mensaje);
  }
  public function Borracomentario($Clave_comentario)
   {

      $activa = \DB:: UPDATE("update comentarios set activo = 'No' where Clave_comentario = $Clave_comentario");
      $proceso = "Eliminar comentario";
      $mensaje = "El Comentario $Clave_comentario ha sido eliminado correctamente";
      return view ('mensaje')
      ->with('proceso',$proceso)
      ->with('mensaje',$mensaje	);
   }
  public function Restauracomentario($Clave_comentario)
   {

      $activa = \DB:: UPDATE("update comentarios set activo = 'Si' where Clave_comentario = $Clave_comentario");
      $proceso = "Activar Comentario";
      $mensaje = "El comentario $Clave_comentario ha sido Activado correctamente";
      return view ('mensaje')
      ->with('proceso',$proceso)
      ->with('mensaje',$mensaje	);
   }
   public function index2()
   {
     return view ('index2');
   }
  }
