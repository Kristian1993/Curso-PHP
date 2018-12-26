<?php
$host="localhost";
$user="root";
$pass="";
$db="";
$conexion = mysqli_connect($host,$user,$pass,$db) or die ("Error en la conexion");
echo "Conexion realizada con éxito<br>";
$consulta = "CREATE DATABASE IF NOT EXISTS nuevaDB";
if(mysqli_query($conexion,$consulta))
{
  echo "BBDD creada";
}
else {
  echo "Problema al crear BBDD.";
}
mysqli_close($conexion);


 ?>
