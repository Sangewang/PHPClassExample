<?php
$car = 0;
$default_cars = "Benze";
if(!isset($car))
{
  $car = $default_cars;
}
if(empty($car))
{
  $car = "Calv";
}
echo "$car <br/>";


$vehicles = array('cars' => null);

$ake_result = array_key_exists('cars',$vehicles);

echo "This is a test $ake_result<br/>";

$isset_result = isset($vehicles['cars']);
echo "This is a test $isset_result <br/>";

$default = array('emperors' => array('Rodolf II','Caligula'),'vegetable'=>'celery','acres'=>15);

foreach($default as $k => $v)
{
  if(!isset($GLOBALS[$k]))
  {
    $GLOBALS[$k] = $v;
  }
}
print_r($GLOBALS);
?>
