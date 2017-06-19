<?php
  class FakeArray implements ArrayAccess
  {
    private $elements;
    public function __construct()
    {
      $this->elements = array();
    }

    public function offsetExists($offset)
    {
      return isset($this->elements[$offset]);
    }

    public function offsetGet($offset)
    {
      return $this->elements[$offset];
    }

    public function offsetSet($offset,$value)
    {
      return $this->elements[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
      unset($this->elements[$offset]);
    }
  }

  $array = new FakeArray;

  $array['animal'] = 'wabbit';

  if(isset($array['animal']) && $array['animal']=='wabbit')
  {
    unset($array['animal']);
  }

  if(!isset($array['animal']))
  {
    print "Well, what did you expect in an opera? A happy ending? \n";
  }

?>
