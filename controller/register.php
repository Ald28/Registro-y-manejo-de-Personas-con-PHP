<?php
include 'model/conexcion.php';

if (!empty ($_POST["btnregistrar"])){
    if (!empty ($_POST["nombre"]) and !empty ($_POST["apellido"]) and !empty ($_POST["numero"]) and !empty ($_POST["correo"]) and !empty ($_POST["contrasena"])){
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $numero = $_POST["numero"];
        $correo = $_POST["correo"];
        $contrasena = $_POST["contrasena"];

        $sql = $conn->query("insert into login(nombre, apellido, numero, correo, contrasena) values ('$nombre','$apellido', '$numero','$correo','$contrasena')");
        
        if ($sql==1){
            echo "Registro exitoso";
        } else {
            echo "Error al registrar";
        }
    }else {
        echo "Todos los campos son obligatorios";
    }
}

?>