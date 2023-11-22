<?php

include "../config/conexion.php";

$idpreso = $_POST['idpreso'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fechaN = $_POST['fechaN'];
    $estado = $_POST['estado'];
    $direccion = $_POST['direccion'];
    $sexo = $_POST['sexo'];
    $motEnc = $_POST['motEnc'];
$sql = "INSERT INTO tbl_prisioneros(nombre,apellido,fechaN,estado,direccion,sexo,motEnc)
    VALUES ('$nombre','$apellido',' $fechaN ',' $estado',' $direccion',' $sexo',' $motEnc')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/stock/index.php");
} else {
    echo "Datos no insertados";
}
