<?php
$email = "w_lin1025@163.com";
if(false === strpos($email,'@'))
{
  print "There was no @ in the e-mail address!";
}
else
{
  echo strpos($email,'@');
}


?>
