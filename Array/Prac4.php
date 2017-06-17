<?php
require_once('array_function.php');
  $items = range(1,10);
  print_r($items);
  echo "<br>------------------<br/>";

  foreach($items as $item=>$value)
  {
    if($item % 2 == 0)
    {
      $items[$item] = 100;
    }
  }
  print_r($items);

  echo "<br>------------------<br/>";
  reset($items);
  while(list($key,$value)=each($items))
  {
    if($key%2==0)
    {
      $items[$key] = -1;
    }
  }
  print_r($items);

  echo "<br>------------------<br/>";
  $words = array("LinWang", "LIWENJUAN","RUBY",array("ROOT","HUAWEI"));
  print_r($words);
  echo "<br>------------------<br/>";
  //array_map('stringtolower',$words);
  stringtolower($words);
  print_r(&$words);
?>
