<?php

include "../config/conexion.php";


    $altura = $_POST['altura'];
    $compleccion = $_POST['compleccion'];
    $tes = $_POST['tes'];
    $peso = $_POST['peso'];
    $nombre = $_POST['nombre'];
    $fechaN = $_POST['fechaN'];
    $condena = $_POST['condena'];

$sql = "INSERT INTO detallesp(altura, compleccion, tes, peso, nombre, fechaN, condena)
    VALUES ('$altura','$compleccion','$tes','$peso', '$nombre','$fechaN','$condena')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/provedor/index.php");
} else {
    echo "Datos no insertados";
}
