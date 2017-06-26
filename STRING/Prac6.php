<?php
$digit_str = '0123456789';
$string_str = 'abcdefghijklmnopqrstuvwxyz';

$characters .= $digit_str;
echo "$characters <br/>";

$characters .= strtolower($string_str);
echo "$characters <br/>";

$characters .= strtoupper($string_str);
echo "$characters <br/>";

function str_rand($length=32,$characters)
{
    if(!is_int($length) || $length<0)
    {
      return false;
    }
    $characters_length = strlen($characters) - 1;
    $string = '';
    for($i=$length;$i>0;$i--)
    {
      $string.=$characters[mt_rand(0,$characters_length)];
    }
    return $string;
}

print str_rand(16,'linwang');

?>
