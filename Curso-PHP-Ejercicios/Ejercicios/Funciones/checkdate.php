<?php
$mes=8;
$dia=2;         //Declaramos variables y su valor
$ano =2011;
IF (checkdate($mes,$dia,$ano)) //Comprobamos si es una fecha válida
  echo "La fecha es correcta";
}
else {
  echo "La fecha no es correcta";
}
 ?>
