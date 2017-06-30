<?php
  function wrap_in_html_tag($text,$tag='strong')
  {
    return "<$tag>$text</$tag>";
  }

  print wrap_in_html_tag("Hey, a moutain lion!.");
  echo "<br/>";
  print wrap_in_html_tag("Look over there!","em");
  echo "<br/>";

  function log_db_error($message=NULL)
  {
    if(is_null($message))
    {
      $message = "Couldn't connect to DB";
    }
    error_log("[DB] [$message]");
    echo "$message";
  }

  log_db_error();
?>
