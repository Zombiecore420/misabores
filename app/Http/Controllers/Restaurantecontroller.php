<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\restaurantes;
use Session;

class Restaurantecontroller extends Controller
{
  public function Altarestaurante(){
    $consulta= restaurantes::orderby('Clave_restaurante','desc')
        ->take(1)
        ->get(); 
  $idsigue = $consulta[0]->Clave_restaurante+1;

    return view ('Altarestaurante')
    ->with('idsigue',$idsigue);

 }

  public function Guardarestaurante(Request $Request){
    $Clave_restaurante = $Request->Clave_restaurante;
    $nombre = $Request->nombre;
    $tel = $Request->tel;
    $calle = $Request->calle;
    $Ncalle = $Request->Ncalle;
    $colonia = $Request->colonia;
    $municipo = $Request->municipo;
    $cp = $Request->cp;
    $correo = $Request->correo;
    $estado = $Request->estado;


        $this->validate($Request,[
        
        'nombre'=>'min:5|max:25|regex:/^[A-Z][a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/',
        'tel'=>'min:7|max:10|required',
        'calle'=>'min:5|max:25|regex:/^[A-Z][a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/',
        'Ncalle'=>'min:2|max:3|required|',
        'colonia'=>'min:5|max:25|regex:/^[A-Z][a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/',
        'municipo'=>'min:5|max:25|regex:/^[A-Z][a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/',
        'cp'=>'min:5|required|',
        'correo'=>'min:8|max:25|regex:/^[A-Z,a-z,0-9,@,.]*$/',
        'estado'=>'min:5|max:25|regex:/^[A-Z][a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/',
        ]);

        

    $emp = new restaurantes;

    $emp->Clave_restaurante = $Request->Clave_restaurante;

    $emp->nombre = $Request->nombre;
    $emp->tel = $Request->tel;
    $emp->calle = $Request->calle;
    $emp->Ncalle = $Request->Ncalle;
    $emp->colonia = $Request->colonia;
    $emp->municipo = $Request->municipo;
    $emp->cp = $Request->cp;
    $emp->correo = $Request->correo;
    $emp->estado = $Request->estado;

    $emp->save();

    $proceso = "Alta de Restaurante";
    $mensaje = "El Restaurante ha sido registrado";
    return view ('mensaje')
    ->with('proceso',$proceso)
    ->with('mensaje',$mensaje);
    }
    public function Reporterestaurante()
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
    $consulta =\DB::select("SELECT Clave_restaurante,nombre,tel,calle,Ncalle,colonia,municipo,
                            cp,correo,estado FROM restaurantes");

      return view ('Reporterestaurante')->with('consulta',$consulta);
}
}
  public function Modificarrestaurante ($Clave_restaurante)
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
    $consulta = restaurantes::where('Clave_restaurante', '=',$Clave_restaurante)->get();
      return view('Modificarrestaurante')
      ->with('consulta',$consulta[0]);
    }
  }
  public function Guardaedicionrestaurante (Request $Request)
{
  $Clave_restaurante = $Request->Clave_restaurante;
  $nombre = $Request->nombre;
  $tel = $Request->tel;
  $calle = $Request->calle;
  $Ncalle = $Request->Ncalle;
  $colonia = $Request->colonia;
  $municipo = $Request->municipo;
  $cp = $Request->cp;
  $correo = $Request->correo;
  $estado = $Request->estado;


      $this->validate($Request,[
      'nombre'=>'min:5|max:25|regex:/^[A-Z][a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/',
      'tel'=>'min:7|max:10|required',
      'calle'=>'min:5|max:25|regex:/^[A-Z][a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/',
      'Ncalle'=>'min:2|max:3|required|',
      'colonia'=>'min:5|max:25|regex:/^[A-Z][a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/',
      'municipo'=>'min:5|max:25|regex:/^[A-Z][a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/',
      'cp'=>'min:5|required|',
      'correo'=>'min:8|max:25|regex:/^[A-Z,a-z,0-9,@,.]*$/',
      'estado'=>'min:5|max:25|regex:/^[A-Z][a-z,A-Z, ,á,é,í,ó,ú,ñ]*$/',
      ]);

      

  $emp = restaurantes::find($Clave_restaurante);
  
  $emp->Clave_restaurante = $Request->Clave_restaurante;

  $emp->nombre = $Request->nombre;
  $emp->tel = $Request->tel;
  $emp->calle = $Request->calle;
  $emp->Ncalle = $Request->Ncalle;
  $emp->colonia = $Request->colonia;
  $emp->municipo = $Request->municipo;
  $emp->cp = $Request->cp;
  $emp->correo = $Request->correo;
  $emp->estado = $Request->estado;

  $emp->save();

  $proceso = "Modificacion de Restaurante";
  $mensaje = "El Restaurante ha sido modificado";
  return view ('mensaje')
  ->with('proceso',$proceso)
  ->with('mensaje',$mensaje);
   }
   public function Borrarestaurante($Clave_restaurante)
    {

       $activa = \DB:: UPDATE("update restaurantes set activo = 'No' where Clave_restaurante = $Clave_restaurante");
       $proceso = "Desactivar Restaurante";
       $mensaje = "El Restaurante $Clave_restaurante ha sido Desactivado correctamente";
       return view ('mensaje')
       ->with('proceso',$proceso)
       ->with('mensaje',$mensaje	);
    }
  public function Restaurarestaurante($Clave_restaurante)
   {

      $activa = \DB:: UPDATE("update restaurantes set activo = 'Si' where Clave_restaurante = $Clave_restaurante");
      $proceso = "Activar Restaurante";
      $mensaje = "El Restaurante $Clave_restaurante ha sido Activado correctamente";
      return view ('mensaje')
      ->with('proceso',$proceso)
      ->with('mensaje',$mensaje	);
   }
   public function index2()
   {
     return view ('index2');
   }
  }
