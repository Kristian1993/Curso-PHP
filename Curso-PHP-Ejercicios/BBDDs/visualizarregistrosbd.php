<?php
$host= "localhost";
$user= "root";
$pass="";
$db="nuevaDB";
$conexion= mysqli_connect($host, $user, $pass, $db)
or die ("Algo ha ido mal, no se ha podido conectar");
echo "Conectado correctament<br>";

$consulta="SELECT * FROM ARTICULOS";
$datos =mysqli_query($conexion,$consulta);
echo '<table border="1">';
while ($reg = mysqli_fetch_row($datos))
{
  echo '<tr>';
  foreach ($reg as $cambia) {
    // code...
  }
  echo '<td>',$cambia,'</td>';
      echo '</tr>';

}
      echo '</table>';
      mysqli_close($conexion);
 ?>
