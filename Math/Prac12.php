<?php
  function may_pluralize($single_word,$amount_of)
  {
    $plurals = array('fish'=>'fish','person'=>'people');
    if($amount_of == 1)
    {
      return $single_word;
    }
    if(isset($plurals[$single_word]))
    {
      return $plurals[$single_word];
    }
    return $single_word . 's';
  }

  $number_of_fish = 1;
  $out1 = "I ate $number_of_fish" . may_pluralize('fish',$number_of_fish).".<br/>";
  echo $out1;

  $number_of_people = 4;
  $out2 = "Soylont Green is ". may_pluralize('person',$number_of_people)."!<br/>";
  echo $out2;


?>
