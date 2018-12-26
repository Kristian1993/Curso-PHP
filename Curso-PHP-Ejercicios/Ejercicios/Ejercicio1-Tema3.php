<br>
<h4> Array creado:</h4>
<?php
//1.- Crear bucle for para crear un array de 10 elementos
for ($int = 1; $int <=10; $int++)
	{
			echo $array[]=$int; //convertimos $int(++) en el valor a guardar dentro de nuestro array
	}
 ?>
<hr/>
<h4>Bucle for</h4>
<?php
for ($int = 0; $int <10; $int++) //Creamos bucle
	{
			echo $array[$int]."&nbsp"; //Imprimimos cada valor del array
	}
 ?>
<hr/>
<h4>Bucle foreach </h4>
<?php
foreach($array as $num)
	{    //Cada valor de $a se convierte en $c
			print  $num ."&nbsp";  //Muestra el resultado del bucle foreach
	}
?>
<hr/>
<h4>Bucle while </h4>
<?php
$int = 0; //variable //contamos con el que el valor 0 es el primero del array
while ($int <=9)
{   //mientras la variable sea menor  o igual que 9, hara lo siguiente:
			echo $array[$int++]."&nbsp";    //incrementa su valor cada vez que se repite el bucle
}
 ?>
