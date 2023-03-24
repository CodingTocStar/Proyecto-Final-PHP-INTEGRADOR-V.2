<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROYECTO FINAL V2 - REGISTRO DE ORADORES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- MI CSS -->
    <link href="estilo/estilo.css" rel="stylesheet">
    
  </head>
  <body>
    <header>
          <div class="container d-flex align-items-center justify-content-between bg-black rounded-pill border border-3 border-warning mt-3 mb-3 p-2">

            <img style="height: 5rem;" src="imagenes/logo.png" alt="Logo de la asociación" class="rounded-circle">
      
            <h1 class="text-warning">Asociacion Codo a Codo</h1>

            <div>

              <a class="navbar-brand" href="https://www.instagram.com/programacodoacodo/" target="_blank">
                <img src="imagenes/instagram-logo.png" alt="Logo instagram" width="30" height="24">
              </a>

              <a class="navbar-brand" href="https://www.facebook.com/groups/135322965179495/" target="_blank">
                <img src="imagenes/facebook-logo.webp" alt="Logo Facebook" width="30" height="24">
              </a>


            </div>

          </div>

          <!--  NAVBAR -->

          <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-top border-bottom border-warning border-2">
            <div class="container-fluid text-primary">
              <a class="navbar-brand fw-bold" href="#">Contenidos</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse mx-3" id="navbarNavDropdown">
                <ul class="navbar-nav">

                  <li class="nav-item mx-3">
                    <a class="nav-link" href="index.php">La conferencia</a>
                  </li>

                  <!-- <li class="nav-item mx-3">
                    <a class="nav-link" href="#">Features</a>
                  </li> -->

                  <!--  
                    Poner mas descripciones de los oradores o de otros posibles oradores

                  <li class="nav-item">
                    <a class="nav-link" href="oradores.html">Los oradores principales</a>
                  </li>

                  Hacer una descripcion de la facultad de Exactas y poner el meme de Hawking de la feista de los viajeros en el tiempo

                  <li class="nav-item">
                    <a class="nav-link" href="lugar.html">Lugar y fecha</a>
                  </li> -->

                  <li class="nav-item mx-3">
                    <a class="nav-link" href="tickets.html">Comprar tickets</a>
                  </li>

                  <li class="nav-item dropdown mx-3">
                    <a class="nav-link dropdown-toggle active fw-medium" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Convertite en orador y +
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item active fw-medium" aria-current="page" href="orador.php">Registrate como orador!</a></li>
                      <li><a class="dropdown-item" href="audiencia.php">Tribuna online</a></li>
                      <li><a class="dropdown-item" href="publicoEnVivo.php">Publico en vivo</a></li>
                      <li><a class="dropdown-item" href="oradoresVoluntariosRegistrados.php">Oradores voluntarios registrados</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

    </header>


    
    <div class="container text-center bg-black text-warning mx-auto mt-3 mb-3 border border-warning border-3 rounded-pill w-50">

      <h2>Convertite en ORADOR</h2>

    </div>

    <!-- METO TODO EL PHP PARA CARGAR ORADORES -->



    <!-- ========================== -->
    <!-- CARGA DE ORADORES  -->
    <!-- ========================== -->

    <!-- formulario -->
    <div class="container mt-3 d-flex justify-content-center flex-column">
      <form class="w-50 mx-auto" action="oradorCarga.php" method="POST">
        
        <div class="w-100 d-flex justify-content-center flex-column">
          
          <!-- NOMBRE -->
          <div class="p-2">
            
            <input required type="text" class="form-control p-2" id="inputPassword" placeholder="Nombre" name="nombre">

          </div>

          <!-- APELLIDO -->
          <div class="p-2">
            
            <input required type="text" class="form-control p-2" id="inputPassword" placeholder="Apellido" name="apellido">

          </div>


          <!-- MAIL -->
          <div class="p-2">
            
            <input required type="text" class="form-control p-2" id="inputPassword" placeholder="Mail" name="mail">

          </div>


          <!--  CONTRASEÑA -->
          <div class="p-2">
            
            <input required type="password" class="form-control p-2" id="inputPassword" placeholder="Contraseña" name="password">

          </div>

          <!-- TITULO CHARLA -->
          <div class="p-2">
            
            <input required type="text" class="form-control p-2" id="titulo-charla" placeholder="Titulo charla" name="charla">

          </div>

          <!-- BOTON -->

          <div class="mx-auto p-2">

            <button type="submit" class="btn btn-primary">Convertite en orador!</button>

          </div>

        </div>
          
      </form>

    </div>



        <!-- FOOTER -->

       <footer class="mt-5 bg-black text-white fw-bold border-top border-warning border-2">
      <div class="container text-center text-white">
        <div class="row">
          <div class="col bg-warning m-3 border border-2 border-white rounded-pill">
            <span>Preguntas frecuentes</span>
          </div>
          <div class="col bg-warning m-3 border border-2 border-white rounded-pill">
            <span>Contactanos</span>
          </div>
          <div class="col bg-warning m-3 border border-2 border-white rounded-pill">
            <span>Prensa</span>
          </div>
          <div class="col bg-warning m-3 border border-2 border-white rounded-pill">
            <span>Conferencias</span>
          </div>
          <div class="col bg-warning m-3 border border-2 border-white rounded-pill">
            <span>Términos y condiciones</span>
          </div>
          <div class="col bg-warning m-3 border border-2 border-white rounded-pill">
            <span>Privacidad</span>
          </div>
          <div class="col bg-warning m-3 border border-2 border-white rounded-pill">
            <span>Estudiantes</span>
          </div>
        </div>
      </div>
    </footer>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>