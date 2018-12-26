<?php
function varios_valores()//return de varios valores
{
return array (2,3,6,8,14);//necesitamos un array
}
$miarray=varios_valores();
for($i=0;$i<=4;$i++) //definimos el bucle para el array
{
echo $miarray[$i];  //Mostramos el resultado de la funcion así. Utilizar [] si no es de tipo string
echo "<br>";
}



 ?>
