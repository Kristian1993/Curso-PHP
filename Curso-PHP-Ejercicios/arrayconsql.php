<?php
$consulta ="SELECT nombre, apellidos FROM alumnos"; //Consulta sql almacenada como variable
$query=mysql_query($consulta, $connect);  //variable query que contiene la $consulta y los datos de conexion a MySQL
$fila = mysql_fetch_array($query);   //fila va a encargarse de mostrar lo que devuelve el array
echo $fila["nombre"];  
echo $fila[1];
?>