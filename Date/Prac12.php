<?php
  $start = new DateTime('August 1 2014');

  $end = new DateTime('September 1 2014');

  $interval = new DateInterval('P1D');

  $range1 = new DatePeriod($start,$interval,$end);

  foreach($range1 as $d)
  {
    print "A day in August is ".$d->format('d')."<br/>";
  }

?>
