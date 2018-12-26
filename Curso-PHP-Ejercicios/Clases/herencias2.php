<?php
class doble
{
  var $mult=2;
  var $numinterno;
    public function multiplicar()
    {
      return $this->mult*$this->numinterno;
    }
    public function dividir()
    {
      return $this->numinterno/$this->mult;
    }
}
class dobleheredada extends doble
{
   function triple()
   {
     return ($this->multiplicar()*$this->numinterno);
   }
}
$miobjeto=new doble();
$miobjeto->numinterno=3;
$doble=$miobjeto->multiplicar();
echo "El valor doble del numero es " .$doble."";
echo "<br>";
$mitad=$miobjeto->dividir();
echo "La mitad del numero es ".$mitad."";
$objeto3= new dobleheredada();
$objeto3->numinterno=3;
echo"<br>";
echo "El doble del cuadrado es " .$objeto3->triple();

 ?>
