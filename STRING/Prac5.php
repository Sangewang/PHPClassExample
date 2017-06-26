<?php
  print strrev("This is not a palindrome.!")."<br/>";

  $target = "Once upon a time there was a turtul.";

  $words = explode(' ',$target );

  $words = array_reverse($words);

  $target_new = implode(' ',$words);

  echo $target."<br/>";
  echo $target_new."<br/>";

?>
