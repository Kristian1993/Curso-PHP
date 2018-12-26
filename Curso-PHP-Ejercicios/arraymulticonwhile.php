<?php
$flores = array(array("Titulo" => "rosa",
                      "Precio" => 2,
                      "Numero" => 13),
                array("Titulo" => "gardenia",
                      "Precio" => 1,5,
                      "Numero" => 10),
                array("Titulo" => "clavel",
                      "Precio" => 0,5,
                      "Numero" => 25),);
//Creamos el array multidimensional
//While repitira el bucle mientras haya valores dentro de $flores
while (list($clave,$valor)=each($flores)) //list consigue almacenar dos valores
//en variables independientes
{
  echo "Posición del array multidimensional: ".$clave."";
  echo $valor['Titulo'];
  echo "-";
  echo $valor['Precio'];
  echo "-";
  echo $valor['Numero'];
  echo "<br>";
}

?>
