<?php

require_once('database.php');

class submitted extends database_object{

  static $table_name="submitted";
  static $db_fields=array('id', 'name', 'email', 'story');
  public $id;
  public $name;
  public $email;
  public $story;
  
  
}

?>