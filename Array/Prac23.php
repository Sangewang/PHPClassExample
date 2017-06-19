<?php
  $old = array('to','be','or','not','to','be');
  $new = array('To','be','or','whatever');

  echo "<br/>------------------------------Show old array------------------<br/>";
  print_r($old);
  
  echo "<br/>------------------------------Show new array------------------<br/>";
  print_r($new);

  $merge = array_merge($old,$new);
  echo "<br/>------------------------------Show merge array------------------<br/>";
  print_r($merge);

  $union = array_unique($merge);
  echo "<br/>------------------------------Show union array------------------<br/>";
  print_r($union);

  $difference = array_diff($old,$new);
  echo "<br/>------------------------------Show diff array------------------<br/>";
  print_r($difference);

  $differ = array_diff(array_map('strtolower',$old),array_map('strtolower',$new));
  echo "<br/>------------------------------Show diff array------------------<br/>";
  print_r($differ);
?>
