<?php
  print substr_replace('My pet is a blue dog.','fish.',12);
  echo "<br/>";
  
  print substr_replace('My pet is a blue dog.','green',12,4);
  echo "<br/>";

  $credit_card = '4111 1111 1111 1111';
  print substr_replace($credit_card,'xxxx ',0,strlen($credit_card)-4);

  print substr_replace('My pet is a blue dog.','fish.',-9);
  echo "<br/>";

  print substr_replace('My pet is a blue dog.','green',-9,4);
  echo "<br/>";

  print substr_replace('My pet is a blue dog.','Title: ',0,0);
  echo "<br/>";

?>
