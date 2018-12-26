<?php
$flores = array( array("Titulo" => "Rosa",
						"Precio" =>20,
						"Numero" =>1,
						),
				array("Titulo"=>"Gardenia",
						"Precio"=>1,5,
						"Numero"=>2,
						),
				array("Titulo"=>"Clavel",
						"Precio"=>10,
						"Numero"=>3,
						)
						);
	
foreach ($flores as $item)    //Por cada item dentro del array flores haz;
{
		echo $item["Titulo"]; //Mostrar titulo
		echo " ";
		
				echo $item["Precio"]; //Mostrar Precio
		echo " ";
				echo $item["Numero"]; //Mostrar numero
		echo "<br>";   //El bucle se repite mientras queden elementos
		}
		
foreach ($flores as $value)
{
		foreach ($value as $indice => $valor) //De esta manera, antes de mostrar el valor, te muestra la columna a la cual pertenece:
		{										//Titulo, precio y número
		echo $indice; // Indice de la variable
		echo " ";
		echo $valor;
		echo "<br>";
		}
}
		
$perros = array("labrador","pastor aleman","husckey");
while($item= each($perros))
{
	echo $item['key']; //Muestra la posición que ocupa el valor dentro del array
	echo "-";
	echo $item['value']; //Muestra el valor de la propiedad dentro del array
}		
		?>