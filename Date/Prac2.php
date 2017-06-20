<?php
  echo "-------------------get stamp by mktime----------------------------<br/>";
  $then = mktime(19,45,3,3,10,1975);
  print $then;

  echo "<br/>-------------------mktime----------------------------<br/>";
  date_default_timezone_set('America/New_York');
  $stamp_future = mktime(15,25,0,12,3,2024);
  print $stamp_future."<br/>";
  
  echo "<br/>-------------------date ----------------------------<br/>";
  $formatted = date('c',$stamp_future);
  print $formatted."<br/>";

  echo "<br/>-------------------gmmktime----------------------------<br/>";
  //$gm_stamp_future = gmmktime(15,25,0,12,3,2024);
  $gm_stamp_future = gmmktime($formatted);
  print $gm_stamp_future."<br/>";

  echo "<br/>-----------DateTime::createFromFormat()---------------------<br/>";
  $text = "Birthday: May 11,1918.";
  $when = DateTime::createFromFormat("*: F j, Y.|",$text);
  $formatted = $when->format(DateTime::RFC850);
  print $formatted;


?>
