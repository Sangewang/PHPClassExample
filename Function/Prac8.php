<?php
function array_status($values)
{
  if(!is_array($values) || !isset($values))
  {
    die("Please check input params<br/>");
  }
  $min = min($values);
  $max = max($values);
  $mean = array_sum($values)/count($values);
  return array($min,$max,$mean);
}

  print_r(array_status(array(1,3,5,9,13,1442)));
  echo "<br/>-------------------------------------------------------------------<br/>";


function time_parts($time)
{
  return explode(':',$time);
}

list($hour,$minute,$second) = time_parts('12:34:56');
echo "hour=$hour, minute=$minute, second=$second<br/>";
?>
