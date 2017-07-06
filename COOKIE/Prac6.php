<?php
function validate($user,$pass)
{
  $user = array('david'=>'fadj&32',
                'adam'=>'8HEj838');

 if(isset($users[$user])&&($users[$user]===$pass))
 {
    return true;
 }
 else
 {
    return false;
 }
}


if(!validate($_SERVER['PHP_AUTH_USER'],$_SERVER['PHP_AUTH_PW']))
{
  http_response_code(401);
  header('WWW-Authenticate:Basic realm="My Website"');
  echo "You need to enter a valid username and Password.";
  exit;
}



?>
