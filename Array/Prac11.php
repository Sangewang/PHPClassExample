<?php
  
$array = array('Emma','Pride and Prejudice','Northhanger Abbey','Sense and Sensibility');

$book = 'Sense and Sensibility';

if(in_array($book,$array))
{
  $postion = array_search($book,$array);
  echo "My favroite location is $postion <br/>";
}
else
{
  echo "Nothing <br/>";
}

$test_A = array('Father'=>'Linwang','Mother'=>'Liwenjuan','child'=>'Ruby');

$key = 'Father';

if(array_key_exists($key,$test_A))
{
  echo "$key exists in Array test_A <br/>";
}
else
{
  echo "$key not exists in Array test_A <br/>"; 
}


?>
