<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $idpreso = $_POST['idpreso'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fechaN = $_POST['fechaN'];
    $estado = $_POST['estado'];
    $direccion = $_POST['direccion'];
    $sexo = $_POST['sexo'];
    $motEnc = $_POST['motEnc'];


    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE tbl_prisioneros SET nombre = '$nombre',apellido = '$apellido', fechaN = '$fechaN',estado = '$estado', direccion = '$direccion', sexo = '$sexo', motEnc = '$motEnc' WHERE idpreso = $idpreso";


    if (mysqli_query($conexion, $consulta)) {
        // RefechaNar a alguna página después de la actualización exitosa
        header("location:../Formularios/stock/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
