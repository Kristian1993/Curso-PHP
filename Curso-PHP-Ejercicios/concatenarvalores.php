<?php
$a = "Yo trabajo en ";
$b = $a . "mi casa"; //Concatenamos el valor $a con el texto html: "mi casa"
echo $b;
$a = "Yo trabajo en ";//
$a .= "mi casa"; //Ahora $a contiene toda la frase. Hemos invocado su valor y le hemos añadido el resto con .=
echo $a;
?>