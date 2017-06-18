<?php
  $colors = array('Red','White','Blue');
  $cities = array('Boston','New York','Chicago');

  array_multisort($colors,$cities);
  print_r($colors);
  echo "<br>---------------------------------</br>";
  print_r($cities);
  echo "<br>---------------------------------</br>";


  $stuff = array('colors' => array('Red','White','Blue'),
                'cities' => array('Boston','New York','Chicago'));
  print_r($stuff);
  echo "<br>---------------------------------</br>";
  array_multisort($stuff);
  print_r($stuff);
  echo "<br>---------------------------------</br>";

  array_multisort($stuff['colors'],$stuff['cities']);
  print_r($stuff);
  echo "<br>---------------------------------</br>";


  $numbers = array(0,1,2,3);
  $letters = array('a','b','c','d');
  array_multisort($numbers,SORT_NUMERIC,SORT_DESC,
                  $letters,SORT_STRING,SORT_DESC);


  print_r($numbers);
  echo "<br>---------------------------------</br>";

  print_r($letters);
  echo "<br>---------------------------------</br>";
?>
