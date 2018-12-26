<?php
class Vehiculo
{//Clase padre de BMV y Seat
  protected $Gasoil=80;//El atributo gasoil no va a cambiar
  public function getGasoil()//Creamos la funcion visible getGasoil()
  {
      return $this->Gasoil;//devuelve el valor de $Gasoil
  }
}
class BMW extends Vehiculo
{//Clase hijo de vehiculo
  public function avanzar()
  {//el vehiculo avanza restandole 10l
    $this->Gasoil -= 10; //En caso de BMW gasta más
  }
}
class Seat extends Vehiculo //Seat complementa a vehiculo, al igual que BMW
{
  public function avanzar()
  {
    $this->Gasoil-=5;
  }
}
class conductor //atributo privado
{
  private $vehiculo;   //definimos la variable vehiculo como privada
  function __construct($objeto)//sometemos la variable vehiculo a la funcion avanzar
  {
    $this->vehiculo=$objeto;
  }
  public function avanzarVehiculo()
  {
    $this->vehiculo->avanzar();
  }
  public function Gasoil()
  {
    return $this->vehiculo->getGasoil();
  }
}
$conductor1=new conductor(new Seat);
$conductor1->avanzarVehiculo();
$conductor2=new conductor(new BMW);
$conductor2->avanzarVehiculo();

echo "Al Seat le quedan: " .$conductor1->Gasoil() ."litros<br>";
echo "Al BMW le quedan " .$conductor2->Gasoil()."litros<br>"

 ?>
