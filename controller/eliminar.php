<?php
include __DIR__ . '/../model/conexcion.php';

if (!empty($_GET["id"])) {
    if (!empty($_GET["id"])) {
        $id = $_GET["id"];
        $sql = $conn->query("DELETE FROM login WHERE id = '$id'");
        if ($sql == 1) {
            echo "Registro eliminado";
            header("location: crud.php");
        } else {
            echo 'Éxito al eliminar
            <a href="../crud.php" class="btn btn-success" role="button">Volver</a>';
        }
    } else {
        echo "Todos los campos son obligatorios";
    }
}

?>