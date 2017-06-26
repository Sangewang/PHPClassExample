<?php
  function pick_color()
  {
    $colors = array('red','orange','yellow','blue','green','indigo','violet');
    $i = mt_rand(0,count($colors)-1);
    return $colors[$i];
  }

  mt_srand(34534);
  $first = pick_color();
  $second = pick_color();

  print "$first is red and $second is yellow <br>";


?>
