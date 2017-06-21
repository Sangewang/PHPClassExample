<?php
  //DateTime::add() & DateTime::sub()
  $birthday = new DateTime('June 21,2017');
  $human_gestation = new DateInterval('P40W');
  $birthday->sub($human_gestation);
  print $birthday->format(DateTime::RFC850);

  echo "<br/>-----------------new DateInterval('P40W')----------------------------<br/>";
  
  $elephant_gestation = new DateInterval('P616D');
  $birthday->add($elephant_gestation);
  print $birthday->format(DateTime::RFC850);
  echo "<br/>-----------------new DateInterval('P616D')----------------------------<br/>";


  $year = 2017;
  $when = new DateTime("November 1,$year");
  if($when->format('D')!='Mon')
  {
    $when->modify("next Monday");
  }
  $when->modify("next Tuesday");

  print "In $year,US election day is on the ". $when->format('jS').' day of November.';

?>
