<?php 
$nombre = mb_strtoupper($_POST['nom']);
$apellido = mb_strtoupper($_POST['ape']);
$cedula = mb_strtoupper($_POST['ced']);
$direccion = mb_strtoupper($_POST['dir']);
$telefono = $_POST['tel'];

include "conexion.php";

$insertar = "INSERT INTO persona (nombre, apellido, cedula, direccion, telefono) VALUES ('$nombre', '$apellido', '$cedula', '$direccion', '$telefono')";

if ($conexion -> query($insertar) == true) {
    header('location: ../registros.php');
}else{
    header('location: ../index.php');
}

$conexion -> close();
?>
