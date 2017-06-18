<?php
  $array = array('apple','banana','cocount','dates');

  print_r($array);
  echo "<br>----------------------------------------------------------<br/>";

  array_splice($array,3);
  print_r($array);
  echo "<br>----------------------------------------------------------<br/>";

  
  array_splice($array,-1);
  print_r($array);
  echo "<br>----------------------------------------------------------<br/>";
  
  array_pop($array);
  print_r($array);
  echo "<br>----------------------------------------------------------<br/>";

  $array = array_pad($array,5,'array_pad');
  print_r($array);
  echo "<br>----------------------------------------------------------<br/>";

?>
