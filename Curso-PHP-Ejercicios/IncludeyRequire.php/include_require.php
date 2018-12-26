<?php
$archivos = array('primero.inc','segundo.inc','tercero.inc'); //abrimos array
for($i=0;$i<count($archivos);$i++) //bucle for con un conteo de elementos
{
  include $archivos [$i];
}
  ?>
