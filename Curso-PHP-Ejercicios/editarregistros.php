<?php
$host= "localhost";
$user= "root";
$pass ="";
$db="nuevaDB";
$conexion=mysqli_connect($host,$user,$pass,$db)
or die("Error, no se pudo conectar a la BD");
echo "conexion establecida con éxito<br>";

$consulta="UPDATE ARTICULOS SET PRECIO_VENTA=PRECIO_COSTO*1.6 WHERE CATEGORIA='PRIMERA'";
if (mysqli_query($conexion, $consulta))
{
  echo "Datos OK";
}
else {
  echo "Algo ha ido mal actualizando los datos";
}
mysqli_close($conexion);
 ?>
