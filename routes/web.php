<?php

Route::get('/', function () {
    return view('login');
});
//-----------vistas principales que se muestran en la pagina----------------
Route::get('/principal','Principalcontroller@principal')->name('principal');
Route::get('/index','Principalcontroller@index')->name('index');
Route::get('/Contacto','Principalcontroller@Contacto')->name('Contacto');
Route::get('/Mision','Principalcontroller@Mision')->name('Mision');
Route::get('/Vision','Principalcontroller@Vision')->name('Vision');
Route::get('/Contacto','Principalcontroller@Contacto')->name('Contacto');
Route::get('/Galeria','Principalcontroller@Galeria')->name('Galeria');
//--------------------------------------------------------------------------

//-----------Alta de comentarios----------------
Route::get('/Altacomentario','Comentariocontroller@Altacomentario')->name('Altacomentario');
Route::POST('/Guardacomentario','Comentariocontroller@Guardacomentario')->name('Guardacomentario');
Route::get('/Reportecomentario','Comentariocontroller@Reportecomentario')->name('Reportecomentario');
Route::get('/index2','Comentariocontroller@index2')->name('index2');
Route::get('/Modificarcomentario/{Clave_comentario}','Comentariocontroller@Modificarcomentario')->name('Modificarcomentario');
Route::POST('/Guardaedicioncomentario', 'Comentariocontroller@Guardaedicioncomentario')-> name ('Guardaedicioncomentario');
Route::get('/Borracomentario/{Clave_comentario}','Comentariocontroller@Borracomentario')->name('Borracomentario');
Route::get('/Restauracomentario/{Clave_comentario}','Comentariocontroller@Restauracomentario')->name('Restauracomentario');

//-----------Alta de usuarios----------------
Route::get('/Altausuario','Usuariocontroller@Altausuario')->name('Altausuario');
Route::POST('/Guardausuario','Usuariocontroller@Guardausuario')->name('Guardausuario');
Route::get('/Reporteusuario','Usuariocontroller@Reporteusuario')->name('Reporteusuario');
Route::get('/index2','Usuariocontroller@index2')->name('index2');
Route::get('/Modificarusuario/{Clave_usuario}','Usuariocontroller@Modificarusuario')->name('Modificarusuario');
Route::POST('/Guardaedicionusuario', 'Usuariocontroller@Guardaedicionusuario')-> name ('Guardaedicionusuario');
Route::get('/Borrausuario/{Clave_usuario}','Usuariocontroller@Borrausuario')->name('Borrausuario');
Route::get('/Restaurausuario/{Clave_usuario}','Usuariocontroller@Restaurausuario')->name('Restaurausuario');

//-----------Alta de donaciones----------------
Route::get('/Altadonacion','Donacioncontroller@Altadonacion')->name('Altadonacion');
Route::POST('/Guardadonacion','Donacioncontroller@Guardadonacion')->name('Guardadonacion');
Route::get('/Reportedonacion','Donacioncontroller@Reportedonacion')->name('Reportedonacion');
Route::get('/index2','Donacioncontroller@index2')->name('index2');
Route::get('/Modificardonacion/{Clave_donacion}','Donacioncontroller@Modificardonacion')->name('Modificardonacion');
Route::POST('/Guardaediciondonacion', 'Donacioncontroller@Guardaediciondonacion')-> name ('Guardaediciondonacion');
Route::get('/Borradonacion/{Clave_donacion}','Donacioncontroller@Borradonacion')->name('Borradonacion');
Route::get('/Restauradonacion/{Clave_donacion}','Donacioncontroller@Restauradonacion')->name('Restauradonacion');

//-----------Alta de restaurantes----------------
Route::get('/Altarestaurante','Restaurantecontroller@Altarestaurante')->name('Altarestaurante');
Route::POST('/Guardarestaurante','Restaurantecontroller@Guardarestaurante')->name('Guardarestaurante');
Route::get('/Reporterestaurante','Restaurantecontroller@Reporterestaurante')->name('Reporterestaurante');
Route::get('/index2','Restaurantecontroller@index2')->name('index2');
Route::get('/Modificarrestaurante/{Clave_restaurante}','Restaurantecontroller@Modificarrestaurante')->name('Modificarrestaurante');
Route::POST('/Guardaedicionrestaurante', 'Restaurantecontroller@Guardaedicionrestaurante')-> name ('Guardaedicionrestaurante');
Route::get('/Borrarestaurante/{Clave_restaurante}','Restaurantecontroller@Borrarestaurante')->name('Borrarestaurante');
Route::get('/Restaurarestaurante/{Clave_restaurante}','Restaurantecontroller@Restaurarestaurante')->name('Restaurarestaurante');

//-----------Alta de administradores----------------
Route::get('/Altaadmin','Admincontroller@Altaadmin')->name('Altaadmin');
Route::POST('/Guardaadmin','Admincontroller@Guardaadmin')->name('Guardaadmin');
Route::get('/Reporteadmin','Admincontroller@Reporteadmin')->name('Reporteadmin');
Route::get('/index2','Admincontroller@index2')->name('index2');
Route::get('/Modificaradmin/{idu}','Admincontroller@Modificaradmin')->name('Modificaradmin');
Route::POST('/Guardaedicionadmin', 'Admincontroller@Guardaedicionadmin')-> name ('Guardaedicionadmin');
Route::get('/Borraadmin/{idu}','Admincontroller@Borraadmin')->name('Borraadmin');
Route::get('/Restauraadmin/{idu}','Admincontroller@Restauraadmin')->name('Restauraadmin');


//-----------Rutas login----------------
Route::get('/login','Accesosistema@login')->name('login');
Route::post('/valida','Accesosistema@valida')->name('valida');
Route::get('/cerrarsesion','Accesosistema@cerrarsesion')->name('cerrarsesion');



/* RUTAS DE NOTIFICACIONES comentarios
Route::get('/notcomel','Comentariocontroller@notifelimina')->name('notificacioneliminah');
Route::get('/notcommod','Comentariocontroller@notifmodifica')->name('notificacionmodificah');
Route::get('/notcomrest','Comentariocontroller@notifrestaura')->name('notificacionrestaurah'); */

/* RUTAS DE NOTIFICACIONES usuarios
Route::get('/notmedel','MedicamentosController@notifelimina')->name('notificacioneliminam');
Route::get('/notmedmod','MedicamentosController@notifmodifica')->name('notificacionmodificam');
Route::get('/notmedrest','MedicamentosController@notifrestaura')->name('notificacionrestauram');

// RUTAS DE NOTIFICACIONES donaciones
Route::get('/notaldel','AlergiasController@notifelimina')->name('notificacioneliminaa');
Route::get('/notalmod','AlergiasController@notifmodifica')->name('notificacionmodificaa');
Route::get('/notalrest','AlergiasController@notifrestaura')->name('notificacionrestauraa');

// RUTAS DE NOTIFICACIONES restaurantes
Route::get('/notusdel','UsuariosController@notifelimina')->name('notificacioneliminau');
Route::get('/notusmod','UsuariosController@notifmodifica')->name('notificacionmodificau');
Route::get('/notusrest','UsuariosController@notifrestaura')->name('notificacionrestaurau');

// RUTAS DE NOTIFICACIONES administradores

Route::get('/notusdel','UsuariosController@notifelimina')->name('notificacioneliminau');
Route::get('/notusmod','UsuariosController@notifmodifica')->name('notificacionmodificau');
Route::get('/notusrest','UsuariosController@notifrestaura')->name('notificacionrestaurau'); */
