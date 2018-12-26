<?php
$host= "localhost";
$user="root";
$pass="";
$db="pruebas";
if($conexion = mysqli_connect($host,$user,$pass,$db))
{
  echo "Conexion realizada con éxito";
}
else {
  echo "No se pudo establecer la conexión<br>";
}


//alternativa más practica
$conexion = mysqli_connect($host,$user,$pass,$db)
or die ("No se pudo realizar la conexion!");
echo "Conexion realizada con exito!";
mysqli_close($conexion);
 ?>
