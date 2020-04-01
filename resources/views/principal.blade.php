<html>
    <head>
	<link rel="icon" href="{{ asset('public/img/Doge.ico') }}">

    <meta http-equiv="imagetoolbar" content="no">

    	<title> Dog's House</title>
    	  <meta charset="utf-8">
    	  <meta name="viewport" content="width=device-width, initial-scale=1">
    	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    	  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    	  <link rel="stylesheet" type="text/css" href="css/index.css">
    	  <style>
    	  	.fondo
    	  	{
    	  		background: url('img/P1.jpg');
    	  		height: 100vh;
    	  		background-position: center;
    	  		background-size: cover;
    	  	}

    	  	.navcolor
    	  	{
    	  		background: rgb(156,156,156);
    	  	}

    	  	.seccion1
    	  	{
    	  		background: rgba(50,108,201,1);
    	  	}

    	  	.bg
    	  	{
    	  		/*background: rgb(255,255,191);*/
    	  		background: rgb(159,213,209);
    	  	}


    	  	.text1
    	  	{
    	  		color: white;
    	  		background: rgba(0,0,0,0.3);
    	  	}

    	  	.textlink
    	  	{
    	  		color:white;
    	  	}
    	  </style>

    </head>


    <body>

    	<!-- Navbar -->
    	<div class="container-fluid navbar-inverse  bg-dark fixed-top">
    			<nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
    		  <img src="img/DogsHouse.png" width="103px">
    		  <a class="navbar-brand" href="/index2.php">Dog's House</a>
    		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		    <span class="navbar-toggler-icon"></span>
    		  </button>

    		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    		    <ul class="navbar-nav ml-auto">
    		      <li class="nav-item active">
    		        <a class="nav-link" href="#"> <i class="fa fa-home fa-lg" style="padding-right: 13px;"> </i> Administración</a>

				</li> <input type="button" value="Ingresar" OnClick="location.href='{{ asset('login') }}'" class="btn btn-outline-success my-2 my-sm-0">
    		      <li class="nav-item">
    		        <a class="nav-link" href="#"></a>
    		      </li>
    		      <!--
    		      <li class="nav-item dropdown">
    		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    		        	<i class="fa fa-address-card fa-lg" style="padding-right: 13px; color: white"></i>
    		          Iniciar Sesión
    		        </a>
    		        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
    		          <a class="dropdown-item" href="Login.html">
    		          	<i class="fa fa-users fa-lg" style="padding-right: 13px; color: black"></i>
    		          	Iniciar Sesión / Registrarse</a>

    		        </div>
    		      </li>
    	!-->

    		    <li class="nav-item dropdown">
    			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    			        	<i class="fa fa-question fa-lg" style="padding-right: 13px; color: white"></i>
    			          	Información / Servicios
    			        </a>
    			        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
    			          <a class="dropdown-item topbar-widget-mymarketplace" href="https://goo.gl/maps/yD5Ba9S5DCTie3Yo9">
    			          	<i class="fa fa-compass fa-lg" style="padding-right: 13px; color: black"></i>
    			      		¿Dónde nos ubicamos?</a>

    			          <!-- <a class="dropdown-item topbar-widget-mymarketplace" href="#"> -->
    			          	<!-- <i class="fa fa-calendar fa-lg" style="padding-right: 13px; color: black"></i> -->
    						<!-- Disponibilidad de Horarios</a> -->

    			          <!-- <div class="dropdown-divider"></div> -->
    					  <!-- <a class="dropdown-item topbar-widget-mymarketplace" href="#">Catálogo de Adopciones</a> -->
    			          <div class="dropdown-divider"></div>
    			          <a class="dropdown-item topbar-widget-mymarketplace" href="Donaciones.html">
    						<i class="fa fa-dollar fa-lg" style="padding-right: 13px; color: black"></i>
    			          	¡Deseo apoyar con una donación!</a>
    			          <a class="dropdown-item topbar-widget-mymarketplace" href="Form_Adopcion.html">
    						<i class="fa fa-paw fa-lg" style="padding-right: 8px; color: black"></i>
    						Deseo poner a mi perro en adopción</a>
    					<div class="dropdown-divider"></div>
    					<a class="dropdown-item topbar-widget-mymarketplace" href="#Catalogo">
    					¡Deseo adoptar a un perrito!
    					<i class="fa fa-arrow-right" style="padding-left: 15px; color: black"></i>
    					</a>


    		        </div>
    		    </li>


    		      <li class="naav-item">
    		        <a class="nav-link" href="#!"></a>
    		      </li>
    		    </ul>

    		  </div>
    		</nav>
    	</div>

    	<!-- Slider -->
    	<div class="container-fluid fondo">
    		<div class="container d-flex flex-column justify-content-center h-100 text-white align-items-center text-justify">
    			<h1>Bienvenidos a Dog's House <br> ¡Casa Hogar para Perros!</h1>
    			<p class="text1">¿Ya no puedes hacerte cargo de tu mascota? ¡Nosotros nos hacemos cargo!</p>
    			<p class="text1">¿Deseas adoptar a un compañero canino? ¡Desliza hacia abajo y dale un vistazo a nuestro catálogo!</p>
    			<div>
    				<!-- <a href="#!" class="btn btn-danger">Leer más</a> -->
    			</div>
    		</div>
    	</div>
    	<!-- Slider -->

    	<!-- Sección 1 -->
    	<div class="container-fluid">
    		<div class="row align-items-center text-justify seccion1 text-white py-3">
    			<div class="col-md-6">
    				<h2>¡Bienvenido! Aquí hay una pequeña guía para comenzar.</h2>
    				<p><b>Si deseas adoptar a un compañero, sigue deslizando, encontrarás un catálogo con muchos
    				perritos en adopción que necesitan a un dueño(a) responsable como tú.
    				Aquí hay algunas preguntas frecuentes. Asegurate de leerlas cuidadosamente, si aún después de leerlas tienes dudas,
    				puedes contactarnos aquí.</b></p>
    				<h5><b>¿Cómo puedo adoptar un perro?</b></h5></p>
    				<p>Primero necesitaras <b> <a class="textlink" href="Login.html">Iniciar Sesión / Registrarte </a></b>, si ya has iniciado sesión, debajo puedes encontrar un catálogo entero con perros en adopción, busca alguno de tu preferencia y presiona el botón "¡Adoptar!", serás rederigido a un pequeño formulario que tendrás que llenar, así podremos ponernos en contacto para verificar que estás en condiciones de adoptar un perro.</p>

    				<h5><b>Ya no puedo hacerme cargo de mi perro. ¿Pueden ayudarme?</b></h5>
    				<p>Entendemos que mantener un perro no es una tarea fácil, claro que te podemos ayudar.
    					Puedes dar clic en la pestaña <b></a>"Información / Servicios"</b> y elegir la opción <b><a class="textlink" href="Adopcion.html">Deseo poner a mi perro en adopción</a></b>, llenarás un pequeño formulario con algunos datos para que nosotros nos pongamos en contacto contigo.</p>

    				<h5><b>¿Existe algún monto económico al querer adoptar / dar en adopción a un perro?</b></h5>
    				<p>Cobramos una pequeña comisión al momento de adoptar o dar en adopción a un perro. Con comisión no nos referimos exactamente a dinero, somos una micro-empresa independiente, nosotros nos encargamos de cuidar y alimentar a los perros que llegan buscando un refugio, por lo tanto, algunos juguetes para perros, cobijas, comida o cualquier cosa que pueda ayudar a los caninos es más que suficiente.</p>
    			</div>
    			<div class="col-md-6">
    				<img src="img/Doge.png" class="img-fluid" alt="Doge" width="450px">
    			</div>
    		</div>

    	</div>
    	<!-- Sección 1 -->

    	<!-- Separador 1 -->
    <a name="Catalogo"></a>
    	<div class="container-fluid py-5 bg-dark text-center text-white">
    		<div>
    		<h1>¡Adopta un Perrito!</h1>
    		</div>
    	</div>
    	<!-- Separador 1 -->

    	<!-- Catálogo 1 -->
    <div class="bg-dark">
    	<div class="container">
    			<div class="card-deck">
    		  <div class="card text-justify border-primary mb-3">
    		    <img class="card-img-top" src="img/P1.jpg" alt="Card image cap">
    		    <div class="card-body">
    		      <h5 class="card-title text-center"><b>Nina & Nana</b></h5>
    		      <p class="card-text">Un par de cachorros hembra, fueron dadas en adopción porque su dueño no
    		       tenía tiempo suficiente para cuidarlas, les encanta jugar juntas y son muy cariñosas.</p>
    		      <p class="card-text"><small class="text-muted">Acogidos el 13/01/2019</small></p>
    			  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">¡Quiero Adoptarlo!</button>

    		    </div>
    		  </div>

    		  <div class="card text-justify border-primary mb-3">
    		    <img class="card-img-top" src="img/P2.jpg" alt="Card image cap">
    		    <div class="card-body">
    		      <h5 class="card-title text-center"> <b>Romeo</b></h5>
    		      <p class="card-text">Hermoso perro Chow Chow, fue dado en adopción porque los padres de los hijos no podían seguir manteniendo al perro, prefieren que tenga un dueño con más posibilidades y un lugar no tan cerrado donde pueda ser más libre.</p>
    		      <p class="card-text"><small class="text-muted">Acogido el 05/07/2019</small></p>
    				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">¡Quiero Adoptarlo!</button>		    </div>
    		  </div>

    		  <div class="card text-justify border-primary mb-3">
    		    <img class="card-img-top" src="img/P3.jpg" alt="Card image cap">
    		    <div class="card-body">
    		      <h5 class="card-title text-center"><b>Rocky</b></h5>
    		      <p class="card-text">Perro Akita bastante alegre, parece ser que se perdió al salir de su casa, jamás se logró contactar con los dueños, es muy juguetón y noble, especialmente con los niños.</p>
    		      <p class="card-text"><small class="text-muted">Acogido el 17/06/2019</small></p>
    				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">¡Quiero Adoptarlo!</button>		    </div>
    		  </div>

    		</div>
    	</div>
    </div>
    	<!-- Fin Catálogo 1 -->

    	<!-- Catálogo 2 -->
    	<div class="bg-dark">
    	<div class="container">
    			<div class="card-deck">
    		  <div class="card text-justify border-primary mb-3">
    		    <img class="card-img-top" src="img/P4.jpg" alt="Card image cap">
    		    <div class="card-body">
    		      <h5 class="card-title text-center"><b>Kobu</b></h5>
    		      <p class="card-text">Kobu fue abandonado por su dueño en la calle, uno de nuestros empleados afortunadamente lo encontró en una de sus busquedas y logró rescatarlo, estuvo en rehabilitación por mucho tiempo, a pesar de eso, ya se encuentra listo para ser adoptado por un dueño responsable, es flojo y le gusta comer mucho.</p>
    		      <p class="card-text"><small class="text-muted">Acogido el 30/04/2019</small></p>
    				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">¡Quiero Adoptarlo!</button>		    </div>
    		  </div>

    		  <div class="card text-justify border-primary mb-3">
    		    <img class="card-img-top" src="img/P5.jpg" alt="Card image cap">
    		    <div class="card-body">
    		      <h5 class="card-title text-center"><b>An & Un</b></h5>
    		      <p class="card-text">Este par de cachorros gemelos fueron recibidos aquí apenas unos meses después de nacer, sus dueños no parecían poder mantener más perros de los que ya poseían en su momento, así que solicitaron de nuestro apoyo, son un par de hermanos muy unidos, no van a ningún lado sin el otro, les gustan los juguetes y son muy limpios.</p>
    		      <p class="card-text"><small class="text-muted">Acogidos el 20/05/2019</small></p>
    				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">¡Quiero Adoptarlo!</button>		    </div>
    		  </div>

    		  <div class="card text-justify border-primary mb-3">
    		    <img class="card-img-top" src="img/P6.jpg" alt="Card image cap">
    		    <div class="card-body">
    		      <h5 class="card-title text-center">Balto</h5>
    		      <p class="card-text">Un perro muy noble rescatado de la calle, su nombre se debe a su gran corazón y obedencia ante las personas, muy juguetón, feliz y le encanta comer, le gusta jugar con niños y revolcarse en el pasto, ama correr al aire libre.</p>
    		      <p class="card-text"><small class="text-muted">Acogido el 18/03/2019</small></p>
    				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">¡Quiero Adoptarlo!</button>
    				 </div>
    		  </div>

    		</div>
    	</div>
    </div>

    	<!-- Catálogo 3  -->

    	<!-- Fin Catálogo 3 -->


    	<!-- PRUEBA MODAL -->
    				<form action="succes.html" method="post">
    					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    				  <div class="modal-dialog" role="document">
    				    <div class="modal-content">
    				      <div class="modal-header">
    				        <h5 class="modal-title" id="exampleModalLabel"><b>INTRODUZCA SUS DATOS</b></h5>
    				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    				          <span aria-hidden="true">&times;</span>
    				        </button>
    				      </div>

    				      <div class="modal-body">
    				        <form action="">
    				          <div class="form-group">
    				            <label for="recipient-name" class="col-form-label">Correo de Contacto:</label>
    				            <input type="text" class="form-control" id="recipient-name" placeholder="ejemplo@hotmail.com">
    				          </div>
    				          <div class="form-group">
    				            <label for="message-text" class="col-form-label">Información:</label>
    				            <textarea class="form-control" id="message-text" placeholder="Por favor, ingrese una breve descripción de porqué desea adoptar a este perrito, nos pondremos en contacto con usted a través de su correo electrónico."></textarea>
    				          </div>
    				        </form>
    				        </div>
    					      <div class="modal-footer">
    					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
    					        <button type="submit" class="btn btn-primary">Procesar Solicitud</button>
    					        </form>
    					      </div>
    				    </div>
    				</div>
    			</div>
    		</div>
    	<!--  -->


    	<!-- Paginación -
    	<div class="py-3 bg-dark">
    		<nav aria-label="Page navigation example">
    		  <ul class="pagination justify-content-center">
    		    <li class="page-item disabled">
    		      <a class="page-link" href="#!" tabindex="-1">Previous</a>
    		    </li>
    		    <li class="page-item"><a class="page-link" href="#!">1</a></li>
    		    <li class="page-item"><a class="page-link" href="#!">2</a></li>
    		    <li class="page-item"><a class="page-link" href="#!">3</a></li>
    		    <li class="page-item">
    		      <a class="page-link" href="#!">Next</a>
    		    </li>
    		  </ul>
    		</nav>
    	</div>
    		 Fin Paginación -->
    	</div>
    	<!-- Fin Catálogo2 -->

    </body>

    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4 py-5 container-fluid bg">

    </div>
      <!-- Footer Links -->
      <div class="container-fluid text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-6 mt-md-0 mt-3">

            <!-- Content -->
            <!-- ICONOS -->
            <h5 class="text-uppercase"><b>Visítanos en:</b></h5>
    		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1882.3252024585192!2d-99.4777555!3d19.3409706!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d20a14878a64eb%3A0x65bdb503fdce37bc!2sUniversidad%20Tecnol%C3%B3gica%20del%20Valle%20de%20Toluca!5e0!3m2!1ses-419!2smx!4v1576080641653!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></i></a>
    	  </div>


          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none pb-3">

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase"> <b>Facebook</b></h5>

            <ul class="list-unstyled">
              <li>

                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v5.0"></script>
                <div class="fb-comment-posts" data-href="https://www.facebook.com/permalink.php?story_fbid=105326540969356&id=105252574310086&__tn__=-R" data-width="300" data-include-parent="false"></div>
                <div class="fb-comments" data-href="https://www.facebook.com/permalink.php?story_fbid=105326540969356&id=105252574310086&__tn__=-R" data-width="10" data-numposts="3"></div>

              </li>
              <li>

              </li>
            </ul>



          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->




          </div>
          <!-- Grid column -->




        </div>
        <!-- Grid row -->

    </div>

      <!-- Footer Links -->

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">&copy; 2019 Copyright:
        <a href="#!"> Dog's House
        </a>
      </div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <script src="js/scroll.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type='text/javascript'>
    	document.oncontextmenu = function(){return false}
    </script>


    </body>
</html>
