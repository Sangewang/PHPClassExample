<?php
  function rand_weighted($numbers)
  {
    $total = 0;
    foreach($numbers as $number=>$weight)
    {
      $total += $weight;
      $distribution[$number] = $total;
    }
    print_r($distribution);
    echo "<br/>";
    $rand = mt_rand(0,$total-1);
    foreach($distribution as $number => $weights)
    {
      if($rand < $weights)
      {
        return $number;
      }
    }
  }

  $ads = array('ford'=>12234,'att'=>33424,'ibm'=>16823);
  $ad = rand_weighted($ads);
  echo "ad id is $ad <br/>";
?>
