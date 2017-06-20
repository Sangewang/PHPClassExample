<?php
  $stamp = mktime(0,0,0,1,1,1986);
  print date('l',$stamp);

  echo "<br/>----------------use date('r')---Show Now--------------------------<br/>";
  print date('r');

  
  echo "<br/>----------------use DateTime()---Show Now--------------------------<br/>";
  $when = new DateTime();
  print $when->format('r');
  
  echo "<br/>----------------getdate()-localtime()--Show Now--------------------------<br/>";
  $now_1 = getdate();
  $now_2 = localtime();
  print "{$now_1['hours']}:{$now_1['minutes']}:{$now_1['seconds']} <br/>";
  print "$now_2[2]:$now_2[1]:$now_2[0]";

  echo "<br/>-----------------------getdate key=>value---------------------------<br/>";
  $a = getdate();
  printf('%s %d ,%d',$a['month'],$a['mday'],$a['year']);

  echo "<br/>-----------------------getdate stamp---------------------------<br/>";
  $b = getdate(163727100);
  printf('%s %d ,%d',$b['month'],$b['mday'],$b['year']);

  
  echo "<br/>-----------------------localtime num key value---------------------------<br/>";
  $a = localtime();
  $a[4] += 1;
  $a[5] += 1900;
  print "$a[4]/$a[3]/$a[5]";

?>
