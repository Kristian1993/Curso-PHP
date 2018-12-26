<?php
class doble
{
var $mult=2;
var $numinterno;
  public function multiplicar()
  {
    return $this->mult*$this->numinterno;
  } //Cerramos funcion multiplicar


public function dividir()
{
   return $this->numinterno/$this->mult;
 }//cerramos funcion dividir
} //cerramos clase

clase dobleheredada extends doble
{
  var $mult=3;
  function multiplicar()
    {
      return $hits->mult*$this->numinterno;
    }
}
$miobjeto=new doble();
$miobjeto->numinterno=3;
$doble=$miobjeto->multiplicar();
echo "El valor del doble es:" $doble."";
echo "<br>";
$mitad=$miobjeto->dividir();
echo "La mitad del numero es: " $mitad."";
$objeto3=new dobleheredada();
$objeto3->numinterno=3;
echo "<br>";
echo "El doble del cuadrado es: " $objeto3->multiplicar();

 ?>
