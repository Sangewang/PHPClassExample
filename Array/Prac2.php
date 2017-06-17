<?php
  $fruits = array('red'=>array('strawberry','apple'),'yellow'=>array('banana'));
  print_r($fruits);
  echo "<br/>---------------------------------------<br/>";
  foreach($fruits as $color => $color_fruite)
  {
    foreach($color_fruite as $fruit)
    {
      print "$fruit is colored $color.<br/>";
    }
  }

?>
