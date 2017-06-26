<?php
  $number = 1234.56;

  $formatted1 = number_format($number);
  echo "number_format(1234.56) = $formatted1 <br/>";

  $formatted2 = number_format($number,2);
  echo "number_format(1234.56,2) = $formatted2 <br/>";

  $formatted3 = number_format($number,2,",",".");
  echo "number_format(1234.56,2," . "\",\"" . "," . "\".\")" ."=". $formatted3." <br/>";

  $number = '1234.56';
  $usa = new NumberFormatter("en-US",NumberFormatter::DEFAULT_STYLE);
  $formatted4 = $usa->format($number);
  echo "$formatted4 <br/>";

  $france = new NumberFormatter("fr-FR",NumberFormatter::DEFAULT_STYLE);
  $formatted5 = $france->format($number);
  echo "$formatted5 <br/>";

  $number = 31415.92653;
  list($int,$dec) = explode('.',$number);

  $formatted = number_format($number,strlen($dec));
  echo "$formatted";

?>
