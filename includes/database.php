

<?php
require_once('config.php');
  $title='';
class MysQL_database{

  private $connection;

  public function __construct()
  {
    $this->open_connection();
  }

  private function open_connection(){
    $this->connection=mysql_connect(DB_SEVER,DB_USER,DB_PASS);
    if(!$this->connection){
        die('mysQl connection failed '.mysql_error());
    }else {
       $db_select= mysql_select_db(DB_NAME, $this->connection);
       if(!$db_select){
         die('database connection failed '.mysql_error());
       }else {

       }
    }

  }


  public function close_connection(){
    if(isset($this->connection)) {
      mysql_close($this->connection);
      unset($this->connection);
    }
  }

  public function querry($sql=''){
    $result= mysql_query($sql, $this->connection);
    if(!$result){
      die("Database query ".mysql_error());
    }else {
      return $result;
    }
    }

    public function fetch_array($value){
      return mysql_fetch_array($value);
    }

}



$database = new MysQL_database();

 ?>
