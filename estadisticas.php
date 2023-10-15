<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- css bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
        <!-- Estilos del mapa -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <!-- iconos en fontawesome -->
    <script src="https://kit.fontawesome.com/4b93f520b2.js" crossorigin="anonymous"></script>
    <!-- bibliotecas del mapa -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <!-- css foote y el header -->
    <link rel="stylesheet" href="./css/footer-header.css">
    <!-- css cuerpo -->
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="icon" type="image/x-icon" href="./img/logo.png">
    <title>IchoClimaOnline: Nosotros</title>
</head>
<body>
    <!-- encabezado -->
    <header>
    <?php include("./componentes/headerinicio.php"); ?>
    </header>
    <div class="container">
        <div class="button-container">
            <button class="select-button" onclick="showMap()">Mapa</button>
        </div>
        <div id="map-container" class="hidden"></div>
        <br><br>
    </div>
    <!-- Pie de pagina -->
    <footer>
        <?php include("./componentes/footer.php")?>
    </footer>
    <!-- modal -->
    <!-- Dentro del modal -->
<div class="modal fade" id="markerInfoModal" tabindex="-1" role="dialog" aria-labelledby="markerInfoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <h5>Nombre del Marcador:</h5>
                    <p id="markerName"></p>                    
                </div>
                <div>
                    <h5>Grafica:</h5>
                    <canvas id="weatherChart" width="400" height="400"></canvas>
                    
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button id="printMarkerInfo"class="btn btn-primary">Imprimir</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- Chart.js (agrega el enlace CDN a tu archivo HTML) -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
    <script src="./js/mostrarmapa.js"></script>
    <script src="./js/imprimir.js"></script>

</body>
</html>
