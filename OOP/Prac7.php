<?php
interface NameInterface
{
  public function getName();
  public function setName($name);
}

class Book implements NameInterface
{
  private $name;
  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    return $this->name = $name;
  }
}

trait NameTrait
{
  private $name;

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    return $this->name = $name;
  }
}

class Book implements NameInterface
{
  use NameTrait;
}

$book = new Book;
$book->setName('PHP CookBook');
print $book->getName();
?>
