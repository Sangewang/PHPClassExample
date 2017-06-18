<?php
function date_sort($a,$b)
{
  list($a_month,$a_day,$a_year) = explode('/',$a);
  list($b_month,$b_day,$b_year) = explode('/',$b);
  
  if($a_year > $b_year) return 1;
  if($a_year < $b_year) return -1;

  if($a_month > $b_month) return 1;
  if($a_month < $b_month) return -1;

  if($a_day > $b_day) return 1;
  if($a_day < $b_day) return -1;

  return 0;
}

$dates = array('12/14/2000','08/10/2001','08/07/1999');
print_r($dates);
echo "<br/>-------------------------------------------------<br/>";
usort($dates,'date_sort');
print_r($dates);
echo "<br/>-------------------------------------------------<br/>";

function array_sort($array,$map_func,$sort_func = '')
{
  $mapped = array_map($map_func,$array);
  print_r($mapped);
  echo "<br/>------------------mapped up------------------------<br/>";
  if(''===$sort_func)
  {
    asort($mapped);
  }
  else
  {
    uasort($mapped,$sort_func);
  }

  print_r($mapped);
  echo "<br/>------------------mapped sort up------------------------<br/>";
  
  print_r($array);
  echo "<br/>------------------array sort up------------------------<br/>";
  while(list($key) = each($mapped))
  {
    $sorted[] = $array[$key];
  }

  print_r($array);
  echo "<br/>------------------array sort up------------------------<br/>";
  return $sorted;

}

function u_length($a,$b)
{
  $a = strlen($a);
  $b = strlen($b);

  if($a == $b) return 0;
  if($a > $b) return 1;
            return -1;
}

function map_length($a)
{
  return strlen($a);
}

$tests = array('one','two','three','four','five','six','six','seven','eight','nine','ten');

print_r($tests);
echo "<br/>---------------------------------------------<br/>";

$tests = array_sort($tests,'map_length');
print_r($tests);
echo "<br/>---------------------------------------------<br/>";




?>
