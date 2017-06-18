<?php
  require('array_function.php');
  
  $thundercats = array('Lion-0','Panthro','Tygra','Cheetara','Snarf');
  //print 'ThunderCat good guys include'.join(',',$thundercats).'.';
  print array_to_comma_string($thundercats);
  


?>
