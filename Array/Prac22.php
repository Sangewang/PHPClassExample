<?php
  $names = array('firstname' => "Baba",'lastname' => "O'Reley");

  array_walk($names , function(&$value,$key)
  {
    $value = strtoupper($value);
  });

  foreach($names as $name)
  {
    print "$name <br/>";
  }

  echo "<br/>------------Prac to Use array_walk_recursive-------------------<br/>";
  $names = array('firstname'=>array("Baba","Bill"),
                'lastname'=>array("O'Riley","O'Reilly"));

  array_walk_recursive($names,function(&$value,$key)
  {
    $value = strtoupper($value);
  });

  foreach($names as $nametypes)
  {
    foreach($nametypes as $name)
    {
      print "$name <br/>";
    }
  }

?>
