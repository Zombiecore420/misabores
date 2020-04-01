<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\donaciones;
use App\usuarios;
use Session;

class Donacioncontroller extends Controller
{
  public function Altadonacion(){
    $consulta= donaciones::orderby('Clave_donacion','desc')
        ->take(1)
        ->get();
  $idsigue = $consulta[0]->Clave_donacion+1;

  $usuarios = usuarios::WHERE('Clave_usuario','>=',0)
    ->orderby('nombre','ASC')->get();


    return view ('Altadonacion')
    ->with('idsigue',$idsigue)
    ->with('usuarios',$usuarios);

 }

  public function Guardadonacion(Request $Request){
    $Clave_donacion = $Request->Clave_donacion;
    $cantidad = $Request->cantidad;
    $fecha = $Request->fecha;
    $Clave_usuario = $Request->Clave_usuario;
    $estado = $Request->estado;

        $this->validate($Request,[
        'cantidad'=>'min:2|max:10|regex:/^[0-9,A-Z,a-z, ]*$/',
        'fecha'=>['required'],
        'estado'=>'min:5|max:25|regex:/^[A-Z][A-Z,a-z,]*$/'
        ]);

    $don = new donaciones;
    $don->Clave_donacion = $Request->Clave_donacion;
    $don->cantidad = $Request->cantidad;
    $don->fecha = $Request->fecha;
    $don->Clave_usuario = $Request->Clave_usuario;
    $don->estado = $Request->estado;
    $don->activo='Si';

    $don->save();

    $proceso = "Alta de donaciones";
    $mensaje = "La donacion ha sido registrada";
    return view ('mensaje')
    ->with('proceso',$proceso)
    ->with('mensaje',$mensaje);
    }
    public function Reportedonacion()
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
    $consulta =\DB::select("SELECT d.Clave_donacion,d.cantidad,d.fecha,u.nombre AS nombre,
                d.estado,d.activo FROM donaciones AS d INNER JOIN usuarios AS u
                ON u.Clave_usuario = d.Clave_usuario");

      return view ('Reportedonacion')->with('consulta',$consulta);
}
}
  public function Modificardonacion ($Clave_donacion)
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
    $consulta = donaciones::where('Clave_donacion', '=',$Clave_donacion)->get();
    $idcs = $consulta[0]->Clave_usuario;

    $nomcol = usuarios::where('Clave_usuario','=',$idcs)->get();
    $nomc =$nomcol[0]->nombre;

    $usuarios = usuarios::where('Clave_usuario','!=',$idcs)->orderby('nombre','asc')->get();

      return view('Modificardonacion')
      ->with('consulta',$consulta[0])
      ->with('usuarios',$usuarios)
      ->with('idcs',$idcs)
      ->with('nomc',$nomc);
    }
  }
  public function Guardaediciondonacion (Request $Request)
{

  $Clave_donacion = $Request->Clave_donacion;
  $cantidad = $Request->cantidad;
  $fecha = $Request->fecha;
  $Clave_usuario = $Request->Clave_usuario;
  $estado = $Request->estado;

      $this->validate($Request,[
      'cantidad'=>'min:2|max:10|regex:/^[0-9,A-Z,a-z, ]*$/',
      'fecha'=>['required'],
      'estado'=>'min:5|max:25|regex:/^[A-Z][A-Z,a-z,]*$/'
      ]);

  $don = donaciones::find($Clave_donacion);
  $don->Clave_donacion = $Request->Clave_donacion;
  $don->cantidad = $Request->cantidad;
  $don->fecha = $Request->fecha;
  $don->Clave_usuario = $Request->Clave_usuario;
  $don->estado = $Request->estado;

  $don->save();

  $proceso = "Modificacion de donaciones";
  $mensaje = "La donacion ha sido registrada";
  return view ('mensaje')
  ->with('proceso',$proceso)
  ->with('mensaje',$mensaje);
  }
  public function Borradonacion($Clave_donacion)
   {

      $activa = \DB:: UPDATE("update donaciones set activo = 'No' where Clave_donacion = $Clave_donacion");
      $proceso = "Desactivar donacion";
      $mensaje = "La donacion $Clave_donacion ha sido Desactivada correctamente";
      return view ('mensaje')
      ->with('proceso',$proceso)
      ->with('mensaje',$mensaje	);
   }
  public function Restauradonacion($Clave_donacion)
   {

      $activa = \DB:: UPDATE("update donaciones set activo = 'Si' where Clave_donacion = $Clave_donacion");
      $proceso = "Activar donacion";
      $mensaje = "La donacion $Clave_donacion ha sido Activada correctamente";
      return view ('mensaje')
      ->with('proceso',$proceso)
      ->with('mensaje',$mensaje	);
   }
   public function index2()
   {
     return view ('index2');
   }
  }
