<?php
class Users
{
  static function find($args)
  {
    $query = "SELECT user FROM users WHERE $args[feild] = $args[value]";
  }

  static function __callStatic($method,$args)
  {
    if(preg_match('/^findBy(.+)$/',$method,$matches))
    {
      return static::find(array('find'=>$matches[1],
                                 'value'=>$args[0]));
    }
  }
}

$user = User::findById(123);
$user = User::findByEmail('rasmus@php.net');



?>
