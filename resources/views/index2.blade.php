<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="icon" href="{{ asset('public/img/Doge.ico') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/bootstrap.min.css') }}">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Sabor es</title>
    <!-- iconnos:css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/simple-line-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/vendor.bundle.base.css') }}">
	  <link rel="stylesheet" type="text/css" href="{{ asset('public/css/style1.css') }}"> <!-- End layout styles -->
    <style>
	  	

	  	.navcolor
	  	{
	  		background: rgb(156,156,156);
	  	}
	  
	  </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
	  <!--Aqui va el logo superior izquierdo -->

        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Sabor es</h5>
          <img src="{{ asset('public/img/fondo.png') }}" alt="logo" class="rounded-circle" height="80" >

          <ul class="navbar-nav navbar-nav-right ml-auto">

			<!--Aqui va el perfil superior derecho -->
			<li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">


                
                 <span class="font-weight-normal">{{Session::get('sesionname')}}</span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="{{asset('/public/img/fondo.png')}}" alt="" height="300" width="300">
                  <p class="mb-1 mt-3">{{Session::get('sesionname')}}
</p>
                  <p class="font-weight-light text-muted mb-0">{{Session::get('sesioncorreo')}}</p>
                </div>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-user text-primary"></i> Mi Perfil</a>
                <a class="dropdown-item" href= "{{URL::action('Accesosistema@cerrarsesion')}}"><i class="dropdown-item-icon icon-power text-primary"></i>Cerrar Sesion</a>
              </div>
            </li>
          </ul>
		        <!-- Icono de menu Hambuerger -->
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="index2" class="nav-link">
                <div class="">
                  <img class="img-xs rounded-circle" src="{{asset('/public/archivos/Doge.png/')}}" alt="">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">{{Session::get('sesionname')}}</p>
                  <p class="designation">{{Session::get('sesiontipo')}}</p>
                </div>
                <div class="icon-container">
                  
                  
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Altas</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('Altacomentario') }}">
                <span class="menu-title">Comentarios</span>
                <i class=" icon-cup menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('Altausuario') }}">
                <span class="menu-title">Usuarios</span>
                <i class="icon-people menu-icon"></i>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="{{ asset('Altadonacion') }}">
                <span class="menu-title">Donaciones</span>
                <i class="icon-bag menu-icon"></i>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="{{ asset('Altarestaurante') }}">
                <span class="menu-title">Restaurantes</span>
                <i class="icon-magnifier-remove menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="{{ asset('Altaadmin') }}">
                      <span class="menu-title">Administradores</span>
                      <i class="icon-pin menu-icon"></i>
                    </a>
                  </li>

            <li class="nav-item nav-category"><span class="nav-link">Reportes</span></li>

            <li class="nav-item">
              <a class="nav-link" href="{{ asset('Reportecomentario') }}">
                <span class="menu-title">Comentarios</span>
                <i class="icon-cup menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('Reporteusuario') }}">
                <span class="menu-title">Usuarios</span>
                <i class="icon-people menu-icon"></i>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="{{ asset('Reportedonacion') }}">
                <span class="menu-title">Donaciones</span>
                <i class="icon-bag menu-icon"></i>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="{{ asset('Reporterestaurante') }}">
                <span class="menu-title">Restaurantes</span>
                <i class="icon-magnifier-remove menu-icon"></i>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="{{ asset('Reporteadmin') }}">
                <span class="menu-title">Administradores</span>
                <i class="icon-pin menu-icon"></i>
              </a>
            </li>
            <li class="nav-item pro-upgrade">
              <span class="nav-link">
                <a class="btn btn-sm btn-block px-0 btn-rounded btn-upgrade" href="{{URL::action('Accesosistema@cerrarsesion')}}" target="_blank"> <i class="icon-logout mx-2"></i> Cerrar sesión</a>
              </span>
            </li>
          </ul>
        </nav>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
		  @yield('contenido')

          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020. Todos los derechos reservados.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Sabor es <i class="icon-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
 <!-- jQuery, Popper.js, Bootstrap JS -->
 <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    
   
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('public/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('public/js/off-canvas.js') }}"></script>
    <script src="{{ asset('public/js/misc.js') }}"></script>

  </body>
</html>
