<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROYECTO FINAL V2 - AUDIENCIA INSCRIPTA</title>
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
                    <li><a class="dropdown-item" href="orador.php">Registrate como orador!</a></li>
                    <li><a class="dropdown-item active fw-medium" aria-current="page" href="audiencia.php">Tribuna online</a></li>
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

      <h2>Tribuna ONLINE</h2>

    </div>


      <!-- Traigo de la BBDD los inscriptos en la audiencia virtual -->

      <?php
          //LOCAL
              $conexion = mysqli_connect("localhost", "root", "", "tp final version 2");

          //SERVIDOR
              // $conexion = mysqli_connect("localhost", "usuario", "contraseña", "nombre base de datos");
          
          //VERIFICACION
              if(mysqli_connect_errno()){

                  echo "Error, no se conecto a la BBDD";

              } 
              // else {

              //     echo "Conectado con EXITO";

              // }
      ?>

      <!-- TABLA -->

      <table class="table w-75 mx-auto mt-4 table-striped">
    <thead>
    <tr class="bg-success text-white text-center">
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Correo</th>
      <th scope="col">Contraseña</th>
    </tr>
  </thead>
  <tbody class="table-warning text-center">
    <?php
        //CONEXION BBDD
            $queryAudiencia = "SELECT * FROM audiencia_virtual"; //selecciona de la tabla audiencia virtual

            $consultaAudiencia = mysqli_query($conexion, $queryAudiencia); //hace una consulta conectando a la bbdd y seleccionando

          
        //BUCLE

        while($listadoAudiencia = mysqli_fetch_array($consultaAudiencia)){//me trae los datos
                ?>
    <tr >
      <td><?php echo $listadoAudiencia['nombre'];?></td>
      <td><?php echo $listadoAudiencia['apellido'];?></td>
      <td><?php echo $listadoAudiencia['mail'];?></td>
      <td><?php echo $listadoAudiencia['password'];?></td>
    </tr>
    
    <?php
            }
    ?>
    
  </tbody>
</table>


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