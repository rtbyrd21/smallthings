<?php

require_once('database.php');

class stories extends database_object{

  static $table_name="stories";
  static $db_fields=array('id', 'name', 'title', 'story');
  public $id;
  public $name;
  public $title;
  public $story;
  
  
}
?>