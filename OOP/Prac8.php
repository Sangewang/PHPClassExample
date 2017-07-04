<?php
abstract class Database
{
  abstract public function connect($server,$username,$password,$database);
  abstract public function query($sql);
  abstract public function fetch();
  abstract public function close();
}

class MySQL extends Database
{
  protected $dbh;
  protected $query;
  public function connect($server,$username,$password,$database)
  {
    $this->dbh = mysqli($server,$username,$password,$database);
  }

  public function query($sql)
  {
    $this->query = mysqli_query($this->dbh,$sql);
  }

  public function fetch()
  {
    return mysqli_fetch_row($this->dbh,$this->query);
  }
  
  public function close()
  {
    mysqli_close($this->dbh);
  }

}


?>
