<?php
  $when = new DateTime("@163727100");
  $when->setTimezone(new DateTimeZone('America/Los_Angeles'));
  $parts = explode('/',$when->format('Y/m/d/H/i/s'));
  print_r($parts);


?>
