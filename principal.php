<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- iconos en fontawesome -->
    <script src="https://kit.fontawesome.com/4b93f520b2.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.3.0/raphael.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- css footer y el header -->
    <link rel="stylesheet" href="./css/footer-header.css">
      <link rel="icon" type="image/x-icon" href="./img/logo.png">
    <title>IchoClimaOnline</title>
</head>
<body>
    <?php
        include ('./componentes/header.php');
    ?>
<div class="container">
    <div class="contenido mt-3">
        <canvas id="chartCombinado" width="100" height="40"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</body>
</html>
<script>
    // Datos para el gráfico combinado
    var datos = [
        {
            label: '22-07-2023',
            data: [75],
            backgroundColor: '#F7C04A'
        },
        {
            label: '22-08-2023',
            data: [60],
            backgroundColor: '#0E5F76'
        },
        {
            label: '22-09-2023',
            data: [80],
            backgroundColor: '#1A5D1A'
        },
        {
            label: '22-10-2023',
            data: [40],
            backgroundColor: '#FF0000'
        }
    ];

    var ctxCombinado = document.getElementById('chartCombinado').getContext('2d');
    var chartCombinado = new Chart(ctxCombinado, {
        type: 'bar', // Tipo de gráfico combinado (bar, pie, line, etc.)
        data: {
            labels: ['Datos'],
            datasets: datos
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>


