<?php
//$a = 1; //Se crea fuera de la función
//Function prueba() {
//echo $a; //$a no tiene valor dentro de la función dado que el valor se le ha dado fuera. 
//}
//Test(); //Nos da error


$var1=1; //Como hacerlo bien:
$var2=2; //Declaramos las variables igual que antes, fuera de la funcion
Function suma(){
 global $var1, $var2, $var3; //Dentro de la función hacemos referencia a que $var1 y $var2 son de ambito global
 	echo "globals:".$var1, $var2."<br>"; //Mostramos que ya cogen valor
	$var2 = $var1+$var2; //Hacemos la suma
	$var3 = $var1+$var2;
}
Suma();
echo  "var 2: ".$var2."<br>"; //Ahora, una vez que estamos fuera de la función, y esta se ha ejecutado, podemos disponer de los valore
//echo "<br>".$var3; //Ojo! Var 3 no se ha declarado como global!
//global $var3; Los valores globales no se pueden declarar fuera de la función.
echo "var 3: ".$var3;
?>


