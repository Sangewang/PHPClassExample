<?php
  function must_be_an_array(array $fruits)
  {
    foreach($fruits as $fruite)
    {
      echo "$fruite<br/>";
    }
  }
  $fruits = array("apple","juice","orange","banana");
  must_be_an_array($fruits);

  function array_or_null_is_ok(array $fruits=null)
  {
    if(is_array($fruits))
    {
      foreach($fruits as $fruite)
      {
        echo "$fruite <br/>";
      }
    }
  }
  array_or_null_is_ok($fruits);
?>
