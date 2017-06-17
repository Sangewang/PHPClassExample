<?php
$animals = array('ant','bee','cat','dog','elk','fox');
print $animals[1]."<br/>";
print $animals[2]."<br/>";
echo  count($animals)."<br/>";
print_r($animals);
echo "<br/>---------------------<br/>";


unset($animals[1]);
print $animals[1]."<br/>";
print $animals[2]."<br/>";
echo  count($animals)."<br/>";
print_r($animals);
echo "<br/>---------------------<br/>";

$animals[] = 'gnu';
print $animals[1]."<br/>";
print $animals[count($animals)]."<br/>";
print_r($animals);
echo "<br/>---------------------<br/>";

$animals = array_values($animals);
print $animals[1]."<br/>";
echo count($animals)."<br/>";
print_r($animals);
echo "<br/>---------------------<br/>";

array_splice($animals , 2, 2);
print_r($animals);
echo "<br/>---------------------<br/>";

?>
