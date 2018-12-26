<?php
$var1 = 'Silvia'; //Asigna el valor Silvia a la variable var1
$var2 = &$var1; //Referencia al valor de la var1
$var2 = "Mi nombre es $var2 <br>"; //Modifica var 2 y var 1
echo $var1;
echo $var2;
?>