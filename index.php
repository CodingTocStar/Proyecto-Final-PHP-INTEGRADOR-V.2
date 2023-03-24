<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROYECTO FINAL V2 - INDEX</title>
    <!-- USANDO BOOTSTRAP 5.1.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- MI CSS -->
    <link href="estilo/estilo.css" rel="stylesheet">

  </head>
  <body>

    <header>
      <div class="container d-flex align-items-center justify-content-between bg-black rounded-pill border border-3 border-warning mt-3 mb-3 p-2">

        <img style="height: 5rem;" src="imagenes/logo.png" alt="Logo de la asociación" class="rounded-circle">
  
        <h1 class="text-warning">Asociación Codo a Codo</h1>

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
                <a class="nav-link active fw-medium" aria-current="page" href="index.php">La conferencia</a>
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
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Convertite en orador y +
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="orador.php">Registrate como orador!</a></li>
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

    
    <!--  CAROUSEL -->
    
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <!-- IMAGEN 1 -->
        <div class="carousel-item active carrusel">
          <img src="imagenes/buenosaires.jpg" class="imagen" alt="...">
          <div class="carousel-caption w-75 d-none d-md-block text-start ps-5">
            <h2 class="texto-prueba text-warning rounded p-1">Conferencia Buenos Aires</h2>
            <h5 class="texto-prueba text-white rounded p-1">Llega por primera vez a la Argentina un grupo de carismáticos expertos a compartir sus grandes conocimientos. Veni a conocer a otros estudiandes de Codo a Codo y compartir experiencias. Te esperamos!</h5>
          </div>
        </div>

        <!-- IMAGEN 2 -->

        <div class="carousel-item active carrusel">
          <img src="imagenes/buenosaires2.jpg" class="imagen" alt="...">
          <div class="carousel-caption w-75 d-none d-md-block text-start ps-5">
            <h2 class="texto-prueba text-warning rounded p-1">Conferencia Buenos Aires</h2>
            <h5 class="texto-prueba text-white rounded p-1">Llega por primera vez a la Argentina un grupo de carismaticos expertos a compartir sus grandes conocimientos. Veni a conocer a otros estudiandes de Codo a Codo y compartir experiencias. Te esperamos!</h5>
          </div>
        </div>

        <!-- IMAGEN 3 -->

        <div class="carousel-item active carrusel">
          <img src="imagenes/buenosaires3.jpg" class="imagen" alt="...">
          <div class="carousel-caption w-75 d-none d-md-block text-start ps-5">
            <h2 class="texto-prueba text-warning rounded p-1">Conferencia Buenos Aires</h2>
            <h5 class="texto-prueba text-white rounded p-1">Llega por primera vez a la Argentina un grupo de carismaticos expertos a compartir sus grandes conocimientos. Veni a conocer a otros estudiandes de Codo a Codo y compartir experiencias. Te esperamos!</h5>
          </div>
        </div>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- TARJETAS -->

    <div class="container text-center bg-black text-warning mx-auto mt-3 border border-warning border-3 rounded-pill w-75">
      <h4>Conoce a los</h4>
      <h2>ORADORES</h2>
    </div>


    <!-- NUEVAS TARJETAS -->

    <div class="row row-cols-1 row-cols-md-3 g-4 mx-2 mt-1">
      <div class="col">
        <div class="card h-100 bg-success">
            <img src="imagenes/elon.jfif" class="mx-auto mt-2 imagenes-cartas" alt="...">
          <div class="card-body">
            <h5 class="card-title text-warning text-center">Elon Musk</h5>
            <p class="card-text text-white">Elon Reeve Musk es un empresario, inversionista y magnate estadounidense de origen sudafricano. Es el fundador, consejero delegado e ingeniero jefe de SpaceX; inversor ángel, CEO y arquitecto de productos de Tesla, Inc; fundador de The Boring Company; y cofundador de Neuralink y OpenAI.</p>
          </div>

        </div>
      </div>
      <div class="col">
        <div class="card h-100 bg-success">
          <img src="imagenes/ada.jfif" class="mx-auto mt-2 imagenes-cartas" alt="...">
          <div class="card-body">
            <h5 class="card-title text-warning text-center">Ada Lovelace</h5>
            <p class="card-text text-white">Augusta Ada King, condesa de Lovelace, registrada al nacer como Augusta Ada Byron y conocida habitualmente como Ada Lovelace, fue una matemática y escritora británica, célebre sobre todo por su trabajo acerca de la computadora mecánica de uso general de Charles Babbage, la denominada máquina analítica.</p>
          </div>

        </div>
      </div>
      <div class="col">
        <div class="card h-100 bg-success">
          <img src="imagenes/neil.jfif" class="mx-auto mt-2 imagenes-cartas" alt="...">
          <div class="card-body">
            <h5 class="card-title text-warning text-center">Neil deGrasse Tyson</h5>
            <p class="card-text text-white">Neil deGrasse Tyson es un astrofísico, escritor y divulgador científico estadounidense. Actualmente es director del Planetario Hayden en el Centro Rose para la Tierra y el Espacio, investigador asociado en el Departamento de Astrofísica del Museo Americano de Historia Natural.</p>
          </div>

        </div>
      </div>
    </div>


    <!-- DESCRIPCION DE BUENOS AIRES -->

    <div class="container text-center mt-5">
      <div class="row">
        <div class="col">
          <img class="w-100 rounded-3 border border-4 border-white" src="imagenes/buenosaires5.jpg" alt="El puente de la mujer">
          
        </div>
        <div class="col mt-2">
          <p class="bg-dark text-white fs-5 p-4 border border-warning border-4 rounded-3">Buenos Aires es la gran capital cosmopolita de Argentina. Su centro es la Plaza de Mayo, rodeada de imponentes edificios del siglo XIX, incluida la Casa Rosada, el icónico palacio presidencial que tiene varios balcones. Entre otras atracciones importantes, se incluyen el Teatro Colón, un lujoso teatro de ópera de 1908 con cerca de 2,500 asientos, y el moderno museo MALBA, que exhibe arte latinoamericano.</p>
        </div>
      </div>
    </div>

    <!-- CONVERTITE EN ORADOR -->

    <div class="container text-center bg-black text-warning mx-auto mt-2 mb-2 border border-warning border-3 rounded-pill">
      <h4>Presencia el</h4>
      <h2>EVENTO ÚNICO</h2>
    </div>

    <div class="container">
      <p class="fs-5 text-dark fw-bold text-center">Reserva tu vacante online a nuestra plataforma privada con el privilegio de hacerle consultas a los oradores!</p>
    </div>

    <!-- formulario -->
    <div class="container mt-3 d-flex justify-content-center flex-column">
      
      <form class="w-50 mx-auto" action="audienciaCarga.php" method="POST">

        <div class="w-100 d-flex justify-content-center flex-column">
          
          <!-- NOMBRE -->
          <div class="p-2">
            
            <input required type="text" class="form-control p-2" id="nombre" placeholder="Nombre" name="nombre">

          </div>

          <!-- APELLIDO -->
          <div class="p-2">
            
            <input required type="text" class="form-control p-2" id="apellido" placeholder="Apellido" name="apellido">

          </div>


          <!-- MAIL -->
          <div class="p-2">
            
            <input required type="text" class="form-control p-2" id="mail" placeholder="Mail" name="mail">

          </div>


          <!--  CONTRASEÑA -->
          <div class="p-2">
            
            <input required type="password" class="form-control p-2" id="password" placeholder="Contraseña" name="password">

          </div>

          <!-- BOTON -->

          <div class="mx-auto p-2">

            <button type="submit" name="boton" class="btn btn-primary">A la tribuna online!</button>

          </div>

        </div>
          
      </form>

    </div>



    <div class="container text-center mt-4">
      
      <h2 class="mb-2">Queres formar parte de la audiencia en vivo?</h2>
      <h3 class="mt-2"><a class="bg-danger link-light rounded-pill ps-2 pe-2 pb-1" href="tickets.html">Comprá tus tickets acá!</a></h3>

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