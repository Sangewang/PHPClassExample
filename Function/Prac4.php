<?php
  function image($img)
  {
    $tag = '<img src="' . $img['src']. '" ';
    $tag .= 'alt="' .(isset($img['alt'])? $img['alt']: '') .'"/>';

  }
  $image1 = image(array('src'=>'cow.png','alt'=>'cows say moo'));
  echo $image1."<br/>";
  $image2 = image(array('src'=>'pig.jpeg'));
  echo $image2;

?>
