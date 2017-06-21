<?php
  $a = strtotime('now');
  print date(DATE_RFC850,$a);
  echo "<br/>---------------------strtotime('now')--------------------------------<br/>";

  $b = strtotime('today');
  print date(DATE_RFC850,$b);
  echo "<br/>---------------------strtotime('today')--------------------------------<br/>";

  
  $a = strtotime('10/25/1990');
  print date(DATE_RFC850,$a);
  echo "<br/>---------------------strtotime('10/25/1990')--------------------------------<br/>";

  
  $b = strtotime('25 October 1990');
  print date(DATE_RFC850,$b);
  echo "<br/>---------------------strtotime('25 October 1990')--------------------------------<br/>";


  $a = strtotime('last wednesday');
  print date(DATE_RFC850,$a);
  echo "<br/>---------------------strtotime('last wednesday')--------------------------------<br/>";

  
  $b = strtotime('2017-6-21 8am + 1month');
  print date(DATE_RFC850,$b);
  echo "<br/>---------------------strtotime('2017-6-21 8am + 1month')--------------------------------<br/>";

  date_default_timezone_set('America/New_York');
  $a = strtotime('2017-07-21 8am America/New_York + 1 month');
  print date(DATE_RFC850,$a);
  echo "<br/>---------------------strtotime('2017-7-21 8am + America/New_York 1month')--------------------------------<br/>";

  $dates = array('01/02/2015','03/06/2015','09/08/2015');
  foreach($dates as $date)
  {
    $default = new DateTime($date);
    $day_first = DateTime::createFromFormat('d/m/Y|',$date);
    printf("The default interpretation is %s\n but day-first is %s.\n",
          $default->format(DateTime::RFC850),
          $default->format(DateTime::RFC850));
  }

?>
