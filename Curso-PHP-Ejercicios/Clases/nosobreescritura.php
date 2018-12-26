<?php
final function multiplicar()//añadir final implica que no se pueda sobreescribir
{
  return $this->mult*this->numinterno;
}



final class doble //funciona tambien con clases
{
  var $mult;
  var $numinterno;
}

 ?>
