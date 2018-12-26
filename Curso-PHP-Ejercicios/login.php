<?php
function validar($user,$pass)
{
  $users = array('Silvia'=>'Silvia','Pedro'=>'Pedro'); //Silvia es $user
  //Silvia es $pass
   //array en el que la posición y el nombre tienen el mismo valor
if(isset($users[$user])&&($users[$user]==$pass))
  {
  return true; //comprobamos si usuario y contraseña figuran en el array
  }
else
  {
  return false;
  }
}
//Comienza el espectaculo
if(!validar($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']))
  {
header('WWW-Authenticate: Basic realm="Mi zona web"');
header('HTTP/1.0 401 Unauthorized');
echo "Tienes que introducir un usuario y contraseña válidos";
exit;
  }
else
  {

    echo "Bienvenido/a " .$_SERVER['PHP_AUTH_USER'];
  }
 ?>
