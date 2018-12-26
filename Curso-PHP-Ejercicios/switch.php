<?php
$ciudad ="Zaragoza"; 
switch($ciudad){  //Segun el valor de ciudad. 
case "Zaragoza";  //En el caso de que sea Zaragoza
echo "La Comunidad es Aragón";  //la respuesta será esta
break; //Indica el final del caso
case "Barcelona";
echo "La comunidad es Cataluña";
case "Castellón";
echo "La comunidad es Valencia";
default;            //Si no es ninguna de las anteriores, por defecto
echo "en alguna parte de España";
}
?>