<?php
$array = array('we','are','family','youyou');

$copy = $array;

$s_copy = join(',',$copy);

echo $s_copy."<br/>";

$string = '';

foreach($array as $key=>$value)
{
  $string .= ",$value";
}

echo $string."<br/>";

$string = substr($string,1);

echo $string;

?>
