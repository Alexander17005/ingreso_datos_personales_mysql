<?php 
$host_name = 'localhost';
$database = 'registro_usuario';
$user_name = 'root';
$password = 'yes';

$conexion= mysqli_connect($host_name, $user_name, $password $database);

if (mysqli_error($conexion)) 
{
    //echo "error al conectarme";
}
else

{
    //echo "me conecte a la base de datos";
}

$acentos = $conexion -> query("SET NAMES 'utf8'");

?>
