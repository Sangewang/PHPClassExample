<?php
  $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
  echo $DOCUMENT_ROOT."<br/>";
  function FileLineGenerator($file)
  {
    if(!$fh = fopen($file,'r'))
    {
      return;
    }
    while(false!==($line = fgets($fh)))
    {
      //yield can be used by php5.5
      echo $line;
    }
    fclose($fh);
  }

  $file = FileLineGenerator("$DOCUMENT_ROOT/log.txt");
  foreach($file as $line)
  {
    if(preg_match('[^lin]',$line))
    {
      print $line;
    }
  }


?>
