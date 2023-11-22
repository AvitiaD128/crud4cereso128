<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $idpreso = $_POST['id'];
    
$causasen = $_POST['causasen'];
$descripcion = $_POST['descripcion'];
$noCaso = $_POST['noCaso'];
$sentencia = $_POST['sentencia'];
$tSentencia = $_POST['tSentencia'];
$fechaN = $_POST['fechaN'];
$noCelda = $_POST['noCelda'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE tbl_sentencia SET causasen = '$causasen',descripcion = '$descripcion', fechaN = '$fechaN',noCaso = '$noCaso', sentencia = '$sentencia', tSentencia = '$tSentencia', noCelda = '$noCelda'  WHERE idpreso = $idpreso";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/productos/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
