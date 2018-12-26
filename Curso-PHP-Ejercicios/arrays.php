<?php

$nombre[]="Paco"; //Guardamos Paco como valor del array
$nombre[3]="Silvia"; //Silvia será el tercer valor dentro del array
echo count($nombre); //Muestra el numero de valores almacenados en el array

$nombres=array("Paco", "Silvia", "Cristian", "Victor"); //Muestra el valor en la posicion especificada
echo $nombres[1];

$nombres=array("Paco",3=>"Silvia","Cristian","Victor"); //Cambia el valor Paco por Silvia
echo $nombres[3];


?>