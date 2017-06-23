<?php
  $number = round(2.4);
  printf("2.4 rounds to the float %s",$number);
  echo "<br/>";
  
  $number = round(2.6);
  printf("2.6 rounds to the float %s",$number);
  echo "<br/>";
  
  $number = round(2.5);
  printf("2.5 rounds to the float %s",$number);
  echo "<br/>";
  
  $number = round(-2.5);
  printf("-2.5 rounds to the float %s",$number);
  echo "<br/>";

  $number = ceil(2.1);
  printf("2.1 rounds up to the float %s",$number);
  echo "<br/>";
  
  $number = ceil(2.9);
  printf("2.9 rounds up to the float %s",$number);
  echo "<br/>";
  
  $number = ceil(-2.9);
  printf("-2.9 rounds up to the float %s",$number);
  echo "<br/>";
  
  $number = ceil(-2.1);
  printf("-2.1 rounds up to the float %s",$number);
  echo "<br/>";

  $number = floor(2.9);
  printf("2.9 rounds down to the float %s",$number);
  echo "<br/>";

  $number = floor(2.1);
  printf("2.1 rounds down to the float %s",$number);
  echo "<br/>";
  
  $number = floor(-2.9);
  printf("-2.9 rounds down to the float %s",$number);
  echo "<br/>";
  
  $number = floor(-2.1);
  printf("-2.1 rounds down to the float %s",$number);
  echo "<br/>";
  
  $cart = 54.23;
  $tax = $cart * .05;
  $total = $cart + $tax;
  $final = round($total,2);

  print "Tax calculation uses all the digitals it needs: $total, but ";
  print "round() trims it two decimal places: $final";

?>
