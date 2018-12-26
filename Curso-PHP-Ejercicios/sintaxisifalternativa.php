<?php
$a =44;
$b =77;
if($a > $b): //Evitar el uso de llaves sustituyendo con :
echo "a es mayor que b";
elseif ($a ==$b):
echo "a es igual que b";
else :
echo "a menor que b";
endif;  //necesitas esto , es como un break();
?>