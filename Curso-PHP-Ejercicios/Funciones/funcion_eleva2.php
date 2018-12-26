<?php
function cuadrado($a)
{ //Pasar varable por valor
$a =$a*$a;
return $a;
}
$a = 5; //asignamos valor estático a a
echo $a; //lo mostramos
echo "<br>";
echo cuadrado($a); //Valor devuelto por la funcion
echo "<br>";
echo $a;  //Comprobamos que el valor de $a que se utilizó en la funcion no se ha modificado

//Llegamos a la conclusion de que aunque la variable $a se ha utilizado como valor de la function
//Esto no implica un cambio en su valor original
 ?>

<?php
function cuadrado2(&$b)//Con esto indicamos que pasamos la variable y no el valor
{
$b = $b*$b;
return $b;
}
$b=6;
echo $b;
echo "<br>";
echo cuadrado2($b);
echo "<br>";
echo $b; //En este caso ahora b no mantiene su valor original

 ?>
 <?php
function micasa ($color = "amarillo")
{
return "Mi casa es de color $color \n";

}
echo micasa();
echo "<br>";
echo micasa("rojo");


  ?>
