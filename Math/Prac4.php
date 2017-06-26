<?php
  $start = 3;
  $end   = 7;
  for($i = $start;$i<=$end;$i++)
  {
    printf("%d squared is %d <br>",$i,$i*$i);
  }

  $numbers = range(3,7);
  foreach($numbers as $n)
  {
    printf("%d squared is %d <br>",$n,$n * $n);
  }
  
  foreach($numbers as $n)
  {
    printf("%d cubed is %d <br>",$n,$n * $n * $n);
  }

  print_r(range('a','z'));
?>
