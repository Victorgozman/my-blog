<?php

require_once('database.php');

class User extends MysQL_database
{
public $id=0;
public $user_name='';
public $password='';
public $email='';
public $first_name='';
public $last_name='';



public function init($id,$user_name,$first_name,$last_name)
{
$this->id=$id;
$this->user_name=$user_name;
$this->user_name=$first_name;
$this->user_name=$last_name;

}

public static function find_by_id($id=0)
{
  $result_array= self::find_by_sql("SELECT *from users where id={$id}  LIMIT 1");
  return !empty($result_array)? array_shift($result_array): false;
}


public static function find_by_sql($sql='')
{
  global $database;
  $result_set= $database->querry($sql);
    $object_array=array();
while($row=$database->fetch_array($result_set)){
    $object_array= self::instantiate($row);
  }
    $obj = json_decode (json_encode ($object_array), FALSE);
}

private static function instantiate($record)
{
  $object= new User();
  $object->id=  $record['id'];
  $object->user_name=$record['username'];
  $object->email=$record['email'];
  $object->first_name=$record['firstname'];
  $object->last_name=$record['lastname'];

/*  foreach($record as $attribute=>$value){
    if($object->has_attributes($attribute)){
      $object->$attribute=$value;
    }
  }*/
  return $object;
}


private function has_attributes($attribute)
{
  $object_vars= get_object_vars($this);
  return array_key_exists($attribute,$object_vars);
}
}

$user=new User();
$user::find_by_sql("SELECT *from users where id=2");
    //print_r(array_values($user));

 ?>
