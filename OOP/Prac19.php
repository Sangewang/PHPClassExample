<?php
class LogFile
{
  protected $filename;
  protected $handle;

  public function __construct($filename)
  {
    $this->filename = $filename;
    $this->open();
  }

  public function open()
  {
    $this->handle = fopen($this->filename,'a');
  }

  public function __destruct($filename)
  {
    fclose($this->handle);
  }

  public function __sleep()
  {
    return array('filename');
  }

  public function __wakeup()
  {
    $this->open();
  }
}


?>
