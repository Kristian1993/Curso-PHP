<?php
if (is_uploaded_file($_FILES['fichero']['tmp_name']))
{//si se sube algun fichero
  //recoge el valor mediante post de : <input type="file" name="fichero"><br>
  echo "Archivo ".$_FILES['fichero']['name'] ."subido con exito \n";
  //Confirmamos que la subida se ha realizado
}
else
{//Si no se sube correctamente...sera por algo
  echo "Problemas con la subida del fichero";
  echo "Nombre del archivo '".$_FILES['fichero']['nombre_tmp'] ."'.";
}
if ($_FILES['fichero']['error'])//Si el fichero presenta algun error
{
  switch ($_FILES['fichero']['error'])
      {//Comprobamos el tipo de error
        case 1: //Similar a las excepciones C#
        echo "El archivo sobrepasa el límite de tamaño permitido del servidor";
        break;
        case 2:
        echo "El archivo sobrepasa el limite de tamaño permitido por HTTP";
        break;
        case 3:
        echo "El envio del fichero se cancelo abruptamente antes de completarla subida";
        break;
        case 4:
        echo "El archivo enviado tiene un tamaño nulo";
        break;
      }
}
if ((isset($_FILES['fichero']['archivo']))&&($_FILES['fichero']['error']==UPLOAD_ERR_OK))
//si el fichero existe y el registro muestra ERROR_OK(sin errores)
{//En unix var/www/uploads/
  $ruta_destino ='C://Xampp/htdocs/';
  move_uploaded_file($_FILES['fichero']['tmp_name'],
  $ruta_destino.$_FILES['fichero']['name']);
}

 ?>
