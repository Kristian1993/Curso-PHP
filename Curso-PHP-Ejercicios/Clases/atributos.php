<?php
 class doble{

var $mult=2;
function __construct($num)
      {
echo "Metodo llamado con el valor $num <br>"; //Valor que le llega a la funcion
echo "El doble de $num es:" .$this->mult*$num; //Obtener el doble del valor
echo "<br>";
      }

}
$miobjeto=new doble(5); //Asignamos aqui los valores a la clase
$objeto2=new doble(3);
 ?>
