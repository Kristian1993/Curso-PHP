<?php
echo "<h3>Postincremento</h3>";
$a = 5;
echo $a++ . "<br>\n"; //este echo te muestra el valor antes de aumentar en 1 su valor. 5
echo $a . "<br>\n";   //si despues de la llamada mostramos su valor, ahora es 6
echo "<h3>Preincremento</h3>";
$a = 5;
echo ++$a . "<br>\n";  //Este hace lo contrario. Primero hace el incremento y luego aumenta el valor
echo $a . "<br>\n";
echo "<h3>Postdecremento</h3>";
$a=5;
echo $a-- . "<br>\n"; //Lo mismo pasa con los decrementos
echo $a ."<br>\n";
echo "<h3>Predecremento</h3>";
$a=5;
echo --$a . "<br>\n";
echo $a ."<br>\n";
?>