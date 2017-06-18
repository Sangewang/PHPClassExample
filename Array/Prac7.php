<?php
$p_language = array('Perl','PHP');

$t_language = array('Linux','Python','PHP');

$p_language = array_merge($p_language,$t_language);

print_r($p_language);
echo "<br>--------------------------------------------<br/>";
$lc = array('a','im'=>'php','HA');

$uc = array('A','im'=>'java','HA');

$ac = array_merge($lc,$uc);

print_r($ac);
echo "<br>--------------------------------------------<br/>";

$kc = $lc + $uc;
print_r($kc);

?>
