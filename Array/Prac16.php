<?php
$states = array('Delaware','Pennsylvania','New Jersey');
print_r($states);
echo "<br>----------------------------------------------------<br/>";
sort($states);
print_r($states);
echo "<br>----------------------------------------------------<br/>";

$scores = array(1,10,2,20);
sort($scores,SORT_NUMERIC);
print_r($scores);
echo "<br>----------------------------------------------------<br/>";

$states = array(1=>'Delaware','Pennsylvania','New Jersey');
print_r($states);
echo "<br>----------------------------------------------------<br/>";
asort($states);
while(list($rank,$state)=each($states))
{
  print "$state was the #$rank state to join the Unites States</br>";
}
echo "<br>----------------------------------------------------<br/>";

$tests = array('test1.php','test10.php','test11.php','test2.php');
print_r($tests);
echo "<br>----------------------------------------------------<br/>";
natsort($tests);
print_r($tests);
echo "<br>----------------------------------------------------<br/>";



?>
