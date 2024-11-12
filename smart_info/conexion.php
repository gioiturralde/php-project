<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$db = "celulares";
$conexion = mysqli_connect( $servidor, $usuario, $password, $db ) or die( mysql_error() );

if ( $_GET['id']) {
   $id = $_GET['id'];
    $resultado = mysqli_query( $conexion, "SELECT * FROM Equipos WHERE id_modelo=$id" );
    $consulta = mysqli_fetch_array( $resultado );
} 
/*if($_GET['marca']) {
    $marca = $_GET['marca'];
    $resultado = mysqli_query( $conexion, "SELECT marca, COUNT(marca) AS cuantos FROM Equipos WHERE marca=\"$marca\"" );
    $consulta = mysqli_fetch_array( $resultado );
}*/

?>
