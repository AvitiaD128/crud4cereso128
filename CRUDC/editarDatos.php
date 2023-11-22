<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $idpreso = $_POST['id'];
    $altura = $_POST['altura'];
    $compleccion = $_POST['compleccion'];
    $tes = $_POST['tes'];
    $peso = $_POST['peso'];
    $nombre = $_POST['nombre'];
    $fechaN = $_POST['fechaN'];
    $condena = $_POST['condena'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE detallesp SET altura = '$altura',compleccion = '$compleccion', tes = '$tes',peso = '$peso', nombre = '$nombre', fechaN= '$fechaN', condena = '$condena' WHERE idpreso = $idpreso";

    if (mysqli_query($conexion, $consulta)) {
        // Retesar a alguna página después de la actualización exitosa
        header("location:../Formularios/provedor/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
