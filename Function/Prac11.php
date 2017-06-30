<?php
function logf()
{
  $date = date(DATE_RSS);
  $args = func_get_args();
  $format = array_shift($args);

  return print "$date:" . vsprintf($format,$args)."\n";
}

logf('<a href="%s">%s</a>','http://developer.ebay.com','eBay Developer Program');



?>
