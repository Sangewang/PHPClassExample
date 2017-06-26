<?php
  $sum = bcadd('1234567812345678','8765432187654321');
  echo gettype($sum)."<br/>";
  echo $sum."<br/>"; 

  $four = gmp_add(2,2);
  printf("four is $four<br/>");

  $eight = gmp_strval((gmp_add('4','4')));
  printf("eight is $eight <br/>");

  $twelve = gmp_strval((gmp_add($four,$eight)));
  printf("twelve is $twelve <br/>");
?>
