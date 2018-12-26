<?php
$nombre="Silvia"; //Asignamos valor a la variable
if($isset($nombre)) {//Si esta definido el valor de $nombre
echo ("La variable Nombre tiene un valor: " .$nombre);
}
unset($nombre);//Asi eliminamos el valor
if($isstet($nombre)){//Comprobamos si tiene valor ahora
echo ("La variable Nombre tiene un valor: " .$nombre);
}
else
{
  echo ("La variable Nombre no tiene un valor: ");
}
?>
