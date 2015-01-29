<?php

require_once('database.php');

class User extends database_object{
  
  static $table_name="users";
  static $db_fields = array('id', 'username', 'password', 'first_name', 'last_name');
  public $id;
  public $username;
  public $password;
  public $first_name;
  public $last_name;
  
public function full_name(){
if(isset($this->first_name) && isset($this->last_name)){
return $this->first_name . " " . $this->last_name;
}else{
 return ""; 
}
}

  public static function authenticate($username="", $password=""){
    global $database;
    $username = $database->mysql_prep($username);
    $password = $database->mysql_prep($password);
    
    $sql  = "SELECT * FROM users ";
    $sql .= "WHERE username = '{$username}' ";
    $sql .= "AND password = '{$password}'";
    $sql .= "LIMIT 1";
    $result_array = self::find_by_sql($sql);
 return !empty($result_array) ? array_shift($result_array) : false;
  }
 

  

  
  
  

  
 
  
}

?>
