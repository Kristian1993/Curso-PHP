<?php
$fecha = mktime(19,15,00,8,13,2011); //formato fecha en php
echo $fecha; //Esto es ilegible
echo "<br>"; //Por eso lo hacemos asi:
echo date("d-M-Y",mktime(19,15,00,8,13,2011));
?>
