<?php
  print "Today is day ".date('d').'of the month and '.date('z'). 'of the year.';

  echo "<br/>--------------------------Up is Date, Down is DateTime::format-----------------------------------------------<br/>";

  $birthday = new DateTime('December 25,1990',new DateTimeZone('America/New_York'));

  print "A big man was born on a ".$birthday->format('l').","."day ".$birthday->format('N')." of the week.";


?>
