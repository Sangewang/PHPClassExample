<?php
  $array_all = array(5,'5','05',12.3,'16.7','five',0xDECAFBAD,'10e200');
  echo "<br/>---------------------------Show array_all---------------------------------<br/>";
  print_r($array_all);
  echo "<br/>---------------------------Judge array_all ---------------------------------<br/>";

  foreach($array_all as $maybeNumber)
  {
    $isItNumber = is_numeric($maybeNumber);
    $actualTyle = gettype($maybeNumber);
    print "Is the $actualTyle $maybeNumber numeric?";
    if($isItNumber)
    {
      print "yes";
    }
    else
    {
      print "no";
    }
    echo "<br/>";
  }


?>
