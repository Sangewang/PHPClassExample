<?php
  $words = explode(' ','My sentence is not very complicated' );
  $count = count($words);
  for($i=0;$i<$count;$i++)
  {
    echo $words[$i]."<br/>";
  }

  $word_arr = preg_split('/\d\. /','My day: 1. get up 2. get dressed 3. eat toast');
  print_r($word_arr);
  echo "<br/>";

  $word_arr = preg_split('/ x /i','31 inches x 22 inches X 9 inches');
  print_r($word_arr);
  echo "<br/>";

  $dwares = 'dopey,sleepy,happy,grumpy,sneezy,bashful,doc';
  $drwaf_array = explode(',',$dwares,5);
  print_r($drwaf_array);
  
  echo "<br/>";
  $math = "3 + 2 / 7 - 9";
  $stack = preg_split('/ *[+\-\/*] */',$math);
  print_r($stack);
?>
