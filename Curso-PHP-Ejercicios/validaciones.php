<?php
$var = '2.3';
if (filter_var($var, FILTER_VALIDATE_INT)== false)
{//si la variable no es un dato entero
echo "Valor incorrecto.No es entero";
}else{
echo "Valor correcto";
}
 ?>
