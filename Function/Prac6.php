<?php
function mean($number)
{
   if(!is_array($number) or !isset($number))
   {
     echo "Please Confirm Input Paras<br/>";
     //exit;
     return;
   }
   $sum = 0;

   $size = count($number);

   for($i=0;$i<$size;$i++)
   {
      $sum+=$number[$i];
   }
   $average = $sum/$size;
   print_r($number);
   echo " average is $average<br/>";
}


  $number1 = "";
  $number2 = array(1,3,5,7,9);
  mean($number1);
  mean(2);
  mean($number2);

function mean1()
{
  $sum = 0;
  $size = func_num_args();
  foreach(func_get_args() as $arg)
  {
    $sum+=$arg;
  }
  $average = $sum/$size;
  echo "average is $average<br/>";
}
  mean(array(2,4,6,8));
?>
