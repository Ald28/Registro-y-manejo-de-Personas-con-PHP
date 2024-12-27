<?php
session_start();
include 'model/conexcion.php';

if (!empty($_POST["btningresar"])){

    if(!empty($_POST["correo"]) and !empty($_POST["contrasena"])){

    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];

    $sql = $conn->query("select * from login where correo = '$correo' and contrasena = '$contrasena'");
    
    if ($datos=$sql->fetch(PDO::FETCH_OBJ)){
        $_SESSION["id"] = $datos->id;
        $_SESSION["correo"] = $datos->correo;
        $_SESSION["contrasena"] = $datos->contrasena;
        /* despues de loguearse se puede añadir el nombre y apellido para poder mostrar el nombre en la interfaz */
        $_SESSION["nombre"] = $datos->nombre;
        $_SESSION["apellido"] = $datos->apellido;
        header("location: user_vist.php");
    }else{
        echo "Datos incorrectos, intente nuevamente.";
    }

    }else{
        echo "Todos los campos son obligatorios.";
    }
}

?>