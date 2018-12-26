<?php
$host="localhost";
$user="root";
$pass ="";
$db="nuevaDB";
$conexion=mysqli_connect($host,$user,$pass,$db) or die ("Error Mysql");
echo "Conexion OK<br>";
$consulta="CREATE TABLE IF NOT EXISTS ARTICULOS(
  ID_ART INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  ARTICULO  varchar(20)NOT NULL,
  COD_FABRICANTE int(3)NOT NULL,
  CATEGORIA varchar(10)NOT NULL,
  PRECIO_VENTA DECIMAL(6,2),
  PRECIO_COSTO decimal(6,2),
  EXISTENCIAS int(5),
  FECHA_COMPRA DATE)";
if(mysqli_query($conexion,$consulta))
{
  echo "Tabla creada OK";
}
else {
  echo "No se ha creado la tabla";
}
mysqli_close($conexion);
 ?>
