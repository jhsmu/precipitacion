<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
       <!-- link de Sweetalert -->
       <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.2/dist/sweetalert2.min.css" rel="stylesheet">
       <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
       <link rel="icon" type="image/x-icon" href="./img/logo.png">
    <title>login|IchoClimaOnline</title>
</head>
<body>
    <div class="box">
    <div class="form">
        <form action="./acciones/iniciarsesion.php" method="post">
            <h2>Incio de sesion</h2>
            <div class="inputBox">
                <input type="email" name="email" required>
                <span>Correo</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="clave_inicio" required>
                <span>Contraseña</span>
                <i></i>
            </div>

            <Input type="submit" name="inicio" value="Iniciar">
        </form>
        
    </div>
    </div>
    
        <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.2/dist/sweetalert2.all.min.js
"></script>

</body>
</html>

<?php 
    if (isset($_SESSION["Datos_incorrectos"])) {
        echo ('<script>Swal.fire({
            title: "Datos incorrectos",
            text: "Los datos ingresados son incorrectos, por favor verifique",
            icon: "info" 
        });
        </script>');
        session_destroy();
    }
?>