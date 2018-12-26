<?php
$flores = array( array("Titulo" => "rosa",   //como crear un array dentro de otro array
				"Precio"=>2,					//El array original es flores, pero dentro de el	
				"Numero"=>13,					//En cada posición tenemos un array con más valores
				),								
				array("Titulo" => "gardenia",
						"Precio" => 1,5,
						"Numero" => 10
						),
				array("Titulo" => "clavel",
						"Precio" => 0,5,
						"Numero" => 25,
						),
						);
				
echo $flores [0]["Titulo"]."<br>";  //Muestra lo que hay en la posición 0 del array flores, y dentro de él elige lo que quiere mostrsr ("TItulo")
echo $flores [1]["Titulo"]."<br>"; 
echo $flores [2]["Titulo"]."<br>"; 
?>				