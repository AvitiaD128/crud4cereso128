<?php

include "../config/conexion.php";
$idpreso = $_POST['idpreso'];
$causasen = $_POST['causasen'];
$descripcion = $_POST['descripcion'];
$noCaso = $_POST['noCaso'];
$sentencia = $_POST['sentencia'];
$tSentencia = $_POST['tSentencia'];
$fechaN = $_POST['fechaN'];
$noCelda = $_POST['noCelda'];

$sql = "INSERT INTO tbl_sentencia(causasen,descripcion,noCaso,sentencia,tSentencia,fechaN,noCelda)
    VALUES ('$causasen','$descripcion','$noCaso','$sentencia','$tSentencia','$fechaN','$noCelda')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/productos/index.php");
} else {
    echo "Datos no insertados";
}
