<?php
class doble
{
var $mult=2;  //declaramos las variables siempre con var
var $numinterno; //esto no será accesible desde fuera de la clase
  function __construct($num)
    {    //El constructor recoge los valores
        echo "Metodo constructor invocado con valor $num<br>";
          $this->numinterno=$num;
          echo "<br>";

    }
    function multxnum()
    {    //Una funcion normal, de multiplicar
      return $this->mult*$this->numinterno;
    }

    function divnum()
    { //Dividir
      return $this->numinterno/$this->mult;

    }
} //Cerramos clase
$miobjeto= new doble(5);
echo "El valor del doble de 5 es: " .$miobjeto->multxnum();
echo "<br>";
echo "El valor dividido por 2 de 5 es:"  .$miobjeto->divnum();

 ?>

<?php

//Otra forma de hacerlo
$objeto2 = new doble(5);
$doble= $objeto2->multxnum();
echo "El valor x2 del num 5 es:" .$doble."";
 ?>
