<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "nuevaDB";
$conexion =mysqli_connect($host, $user, $pass, $db)
or die ("No se pudo realizar la conexion");
echo "Conexion realizada con exito<br>";

$consulta="INSERT INTO ARTICULOS (ID_ART, ARTICULO, COD_FABRICANTE, PESO, CATEGORIA, PRECIO_VENTA, PRECIO_COSTO, EXISTENCIAS, FECHA_COMPRA)
VALUES
(1, 'MACARRONES',100,2,'PRIMERA',10.00,5.00,400,'2011-03-04')";
if (mysqli_query($conexion, $consulta))
{
 echo "Datos insertados OK";
}
else {
  echo "Algo fallo al insertar datos";
}
mysqli_close($conexion);
 ?>
