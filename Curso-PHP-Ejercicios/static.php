<?php
Function Cuentaatras() {
static $a = 10; //static funciona de manera parecida a global. Manteniendo un valor constante tanto fuera como dentro de las funciones
echo $a."<br>";
$a--;
}
Cuentaatras();
Cuentaatras();
?>