<?php
$hora=time(); //El formato time necesita una conversion. Si se ve así es incomprensible
echo $hora."<br>";
$hora=getdate(time());//en cambio este formato esta OK
echo $hora["hours"].":".$hora["minutes"].":".$hora["seconds"];
?>
