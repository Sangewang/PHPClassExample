<?php
  $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
  echo "$DOCUMENT_ROOT<br/>";
  $pantry = array('siugar'=>'2 lbs.','butter'=>'3 sticks');
  $fp = fopen("$DOCUMENT_ROOT/pantry",'w') or die("Can't open pantry");
  fputs($fp,serialize($pantry));
  fclose($fp);
  
  $new_pantry = unserialize(file_get_contents("$DOCUMENT_ROOT/pantry"));
  print_r($new_pantry);


  $fp = fopen("$DOCUMENT_ROOT/pantry.json",'w') or die("Can't open pantry");
  fputs($fp,json_encode($pantry));
  fclose($fp);
  print_r(json_decode(file_get_contents("$DOCUMENT_ROOT/pantry.json"),TRUE));  

?>
