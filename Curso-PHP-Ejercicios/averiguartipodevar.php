<?php
$edad="34";
print("Tipo actual:".gettype($edad)."<br>"); //gettype muestra el tipo actual
settype($edad,"integer"); //settype cambia el tipo actual
print ("Tipo actual:".gettype($edad)."<br>");
?>