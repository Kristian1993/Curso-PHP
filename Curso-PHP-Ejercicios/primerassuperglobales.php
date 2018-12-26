<?php
echo "Tu direccion IP es: ".$_SERVER['REMOTE_ADDR']."<br>";  //Variable superglobal que muestra la IP Las comillas se hacen con la tecla ?
echo "Tu dirección de proyecto es : ".$_SERVER['DOCUMENT_ROOT']." <br>"; //Muestra el directorio de archivos que carga la pagina
?>