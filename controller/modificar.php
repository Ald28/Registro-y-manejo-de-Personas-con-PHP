<?php

if(!empty($_POST["btnmodificar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["numero"]) and !empty($_POST["correo"]) and !empty($_POST["contrasena"])){
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $numero = $_POST["numero"];
        $correo = $_POST["correo"];
        $contrasena = $_POST["contrasena"];
        
        $sql = $conn->query("update login set nombre='$nombre', apellido='$apellido', numero='$numero', correo='$correo', contrasena='$contrasena' where id='$id'");
        
        if($sql == 1){
            echo "Registro modificado";
            header("location: crud.php");
        }else{
            echo "Error al modificar";
            header("location: crud.php");
        }

    }else{
        echo "Todos los campos son obligatorios";
    }
}

?>