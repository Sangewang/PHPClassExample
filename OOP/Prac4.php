<?php
class Person
{
  public    $name;
  public    $age;
  public    $salary;
  public function __construct($name)
  {
    $this->name = $name;
  }
  public function set_age($age)
  {
    $this->age = $age;
  }
  public function set_salary($salary)
  {
    $this->salary = $salary;
  }
/*  public function __get($name)
  {
    return $this->name;
  }*/
}

$person = new Person();
$person->name = "linwang";
$person->set_age(27);
$person->set_salary(12000);

echo $person->name;
echo $person->age;
echo $person->salary;
?>
