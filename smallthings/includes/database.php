<?php

require_once("config.php");
class MySQLDatabase{
 
  public $connection;
  public $last_query;
  private $magic_quotes_active;
  private $real_escape_string_exists;
 function __construct(){
    $this->open_connection();
    $magic_quotes_active = get_magic_quotes_gpc();
    $this->real_escape_string_exists = function_exists("mysql_real_escape_string");
  }
  public function open_connection(){
  $this->connection = mysql_connect(DB_HOST, DB_USER, DB_PASS);
    if(!$this->connection){
    die("Database connection failed: " . mysql_error());
    }else{
    $db_select = mysql_select_db(DB_NAME, $this->connection);
      if (!$db_select){
      die("Database selection failed: " . mysql_error());
      }
    }
  }
  
  
  public function close_connection(){
    if(isset($this->connection)){
  mysql_close($this->connection);
  unset($this->connection);
    }
  }
  
  public function query($sql){
    $this->last_query = $sql;
    $result = mysql_query($sql, $this->connection);
    $this->confirm_query($result);
    return $result;
  }
  public function confirm_query($result){
    if(!$result){
      $output = "Database query failed: " . mysql_error() . "<br/><br/>";
      $output .= "Last SQL query " . $this->last_query;
      die($output);
    }
  }
 
  public function mysql_prep($value){
     if($this->real_escape_string_exists){
        if($this->magic_quotes_active) {$value = stripslashes($value);}
        $value = mysql_real_escape_string($value);
      }else{
        if(!$this->magic_quotes_active){ $value = addslashes($value);}
        }
    return $value;
  }
  
  
}

$database = new MySQLDatabase();

?>