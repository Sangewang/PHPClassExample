<?php
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  if(!isset($email))
  {
    echo "Your input email is Error , Please Go back to confirm it.<br/>";
    exit;
  }
  else
  {
    echo "$email<br/>";
  }
  
  $location = strpos($email,'@');
  echo "@ in $email location is $location<br/>";

  $substring = substr($email,0,$location);
  echo "$substring from 0 to $location<br/>";

  $substring1 = substr($email,5);
  echo "$substring1 from 5 to end...<br/>";
  
  $substring2 = substr($email,-5);
  echo "$substring2 from -5 to end...<br/>";
  
  $substring3 = substr($email,-5,-2);
  echo "$substring3 from -5 to end...<br/>";
?>
