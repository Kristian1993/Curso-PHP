<?php
$edad=34;
if(is_int($edad)) //Comprobamos si es entero
echo $edad."es entero"; //Lo es
else
echo $edad."no es entero"; //No lo es
$edad2=settype($edad,"double"); //Cambiamos tipo
$edad3=$edad +0.1; //Añadimos valor decimal
if(is_int($edad3)) //Comprobamos si se realiza la conversion y el resultado es decimal
echo $edad3."es entero";
else
echo $edad3."no es entero";