<?php
  $array = array('c++','java','php','Perl','luck'=>'Linux','windows');
  $position = array_search('Liux',$array);
  if($position !== false)
  {
    echo $position;
  }
  else
  {
    echo "Not Target<br/>";
  }
?>
