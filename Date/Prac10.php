<?php
  $nowInNewYork = new DateTime('now',new DateTimeZone('America/New_York'));
  $nowInCalifonia = new DateTime('now',new DateTimeZone('America/Los_Angeles'));

  printf("It's %s in New York but %s in California.",
      $nowInNewYork->format(DateTime::RFC850),
      $nowInCalifonia->format(DateTime::RFC850));

  echo "<br/>-----------------------------------------------------<br/>";
  $now = time();
  date_default_timezone_set('America/New_York');
  print date(DATE_RFC850,$now);
  print "\n";

  date_default_timezone_set('Europe/Paris');
  print date(DATE_RFC850,$now);

?>
