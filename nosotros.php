<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- css bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <!-- iconos en fontawesome -->
    <script src="https://kit.fontawesome.com/4b93f520b2.js" crossorigin="anonymous"></script>
    <!-- css foote y el header -->
    <link rel="stylesheet" href="./css/footer-header.css">
    <!-- css cuerpo -->
    <link rel="stylesheet" href="./css/stylecuerpo.css">
    <link rel="icon" type="image/x-icon" href="./img/logo.png">
    <title>IchoClimaOnline: Nosotros</title>
</head>
<body>
  <!-- encabezado -->
    <header>
    <?php include("./componentes/headerinicio.php"); ?>
    </header>

    <div class="container">
        <div class="row">
            <div class="col mt-3 mb-4">
            <div class="d-flex position-relative " >
            <img src="./img/logo.png" height="200px" class="flex-shrink-0 me-3" alt="...">
            <div>
            <h1 style="text-align: center;">IchoClimaOnline</h1>
            <p style="text-align: justify;margin-right: 15px;" >En IchoClimaOnline, nos apasiona seguir de cerca los patrones de precipitación en todo el mundo, y nuestro objetivo es brindarte las herramientas necesarias para comprender y anticipar los cambios en el clima. Ya sea que estés interesado en la lluvia que se avecina en tu ciudad o desees explorar tendencias a largo plazo en las precipitaciones globales, estás en el lugar adecuado.</p>
            </div>
            <div >
            <img src="./img/jefa.jpg" height="200px" alt="">
            <p style="text-align: center;">Michelle Obama</p>
            </div>
        </div>
            </div>
        </div>
        <div class="row">
            <!-- Mision -->
        <div class="col-sm-6 mb-3">
        <div>
      <div class="card-body ">
        <h2 class="card-title" style="text-align: center;">Misión</h2>
        <p class="card-text" style="text-align: justify;">Proporcionar información precisa sobre el clima y la precipitación para empoderar a las personas y comunidades a tomar decisiones informadas y promover la comprensión del clima.</p>
      </div>
    </div>
            </div>
    <!-- Vision -->
            <div class="col-sm-6 mb-3">
    <div>
      <div class="card-body">
        <h2 class="card-title" style="text-align: center;">Visión</h2>
        <p class="card-text" style="text-align: justify;">Convertirse en la principal fuente global de información meteorológica y de precipitación en línea, aplicando tecnología avanzada para contribuir a un mundo más preparado y sostenible.</p>
      </div>
    </div>
            </div>
        </div>
    </div>

    <div class="container">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./img/carucel1.jpg" class="d-block" style="width: 100%; height: 275px;" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./img/carucel2.jpg" class="d-block" style="width: 100%; height: 275px;" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./img/carucel3.jpg" class="d-block" style="width: 100%; height: 275px;" alt="...">
          </div>
        </div>
      </div>
      <br>
      <div class="d-flex flex-column justify-content-center align-items-center text-black fs-1">
        <h1 style="font-size: 0.9em;">Que es</h1>
      </div>
      <!-- informacion de sanfrancisco de icho -->
      <div class="card mb-3" style="width: 100%;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="./img/SanFranciscodeIchó.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">San Francisco de Ichó</h5>
              <p class="card-text">La comunidad de San Francisco de Ichó está localizada a 5°46' latitud norte y 76°30' longitud oeste, al occidente del país. Pertenece al municipio de Quibdó, capital del departamento del Chocó (Colombia).</p>
            </div>
          </div>
        </div>
      </div>
      <br><br>
    </div>
    <!-- Pie de pagina -->
    <footer>
        <?php include("./componentes/footer.php")?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
</body>
</html>
