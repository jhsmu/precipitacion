<?php 

error_reporting( ~E_NOTICE );

require '../database/conexion.php';

if(isset($_POST["inicio"])){
    $email=$_POST["email"];
    $contra=htmlentities($_POST["clave_inicio"]);

    $consultar=$DB_con->prepare('SELECT * FROM administrador WHERE email=:email');
    $consultar->bindParam(':email', $email);
    $consultar->execute();

    $admin=$consultar->fetch(PDO::FETCH_ASSOC);

    if($email==$admin["email"] and $contra==$admin["contrasenia"]){
        session_start();
        $_SESSION["id"]=$admin["id_administrador"];
        header('location:../principal.php');
    }else{
        session_start();
        $_SESSION["Datos_incorrectos"] = "Datos incorrectos";
        header("location:../index.php");
    }
}