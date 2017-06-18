<?php
  $str_array = array('a_linwang','b_linwang','c_linwang','A_LinWang','B_LinWang');

  $largest = max($str_array);
  print $largest."<br/>";
  $smallest = min($str_array);
  print $smallest."<br/>";

  asort($str_array);
  print_r($str_array);
  print_r(arsort($str_array));
?>
