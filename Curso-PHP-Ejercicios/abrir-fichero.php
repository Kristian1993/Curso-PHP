<?php //fopen(string $filename, string $mode, [, bool $use_include_path = false])
//@fopen ("contador.txt", "r") or die ("El fichero no ha podido ser abierto");
//@ acompaña al die, para especificar que tiramos de aqui antes que de los
//mensajes de error del sistema.
?>
<?php
$fichero=@fopen ("contador.txt", "r") or die ("El fichero no ha podido ser abierto");
$fichero=@fopen("contador2.txt", "w");//si no existe con w lo crea
fclose($fichero);
 ?>
