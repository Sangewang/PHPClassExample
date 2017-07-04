<?php
class shape
{
  function draw()
  {
    echo "output father in the screen<br/>";
  }
}


class circle extends shape
{
  function draw($origin,$radius)
  {
    if($radius>0)
    {
      parent::draw();
      return true;
    }
    else
    {
      echo "output son in the screen<br/>";
    }
  }
}

$circle = new circle;
$circle->draw(1,-2);


?>
