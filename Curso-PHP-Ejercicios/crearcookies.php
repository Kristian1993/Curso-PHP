<?php
//Tenemos que especificar por lo menos $name y $value, o nos dará error
//name nombre de la cookie
//value valor de la cookie
//expire cuando expira la cookie, default es 0, cuando se cierra el navegador
//path es la ruta donde se alojará la cookie. Config en php.ini
//domain especifica para que dominio va a estar disponible la cookie
//secure Si true la cookie solo por https
//httponly si true solo http y sin javascript
 ?>

 <?php
 //Cookie config
setcookie("cookie[tres]","cookietres", time()+3600);
setcookie("cookie[dos]","cookiedos", time()+3600);
setcookie("cookie[uno]","cookieuno", time()+3600);

if(isset($_COOKIE['cookie'])){
foreach($_COOKIE['cookie'] as $name =>$value)
{
  echo "$name : $value <br/>\n";
}

}


   ?>
