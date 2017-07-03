<?php
class Database
{
  function  __construct()
  {
    db_connect($this->handle);
  }
  function __destruct()
  {
    db_close($this->handle);
  }

}



?>
