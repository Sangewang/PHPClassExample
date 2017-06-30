<?php
function &FindAndReplaceTarget($dst,&$src)
{
  foreach($src as $key=>$value)
  {
    if($value == $dst)
    {
      return $src[$key];
    }
  }
}

$src = array("linwang"=>100,"liwenjuan"=>99,"ruby"=>95);

$value = &FindAndReplaceTarget("100",$src);

echo "$value<br>";

$value = "0-)>";

print_r($src);
?>
