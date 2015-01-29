<?php

require_once('database.php');

class database_objec{
  
  static $table_name;
  
  public static function find_all(){
    return static::find_by_sql("SELECT * FROM ".static::$table_name);
  }
  
  public static function find_by_id($id=0){
  global $database;
  $result_array = static::find_by_sql("SELECT * FROM " .static::$table_name." WHERE id=" .$database->mysql_prep($id)." LIMIT 1");
 return !empty($result_array) ? array_shift($result_array) : false;
  }
  
  public static function find_by_sql($sql=""){
  global $database;
  $result_set = $database->query($sql);
  $object_array = array();
  while($row = mysql_fetch_array($result_set)){
      $object_array[] = static::instantiate($row);
  }
    return $object_array;
  }
  
  
  
  private static function instantiate($record){
    $class_name = get_called_class();  
    $object = new $class_name;
   
    foreach($record as $attribute=>$value){
      if($object->has_attribute($attribute)){
        $object->$attribute = $value;
      }
    }
    
    return $object;
  }
  
  private function has_attribute($attribute){
    $object_vars = $this->attributes();
    return array_key_exists($attribute, $object_vars);
  }
    protected function attributes(){
    $attributes = array();
    foreach(static::$db_fields as $field){
      if(property_exists($this, $field)){
        $attributes[$field] = $this->$field;
        }
      }
      return $attributes;
    }
    protected function sanitized_attributes() {
    global $database;
    $clean_attributes = array();
    //sanitize the values before submitting
    foreach($this->attributes() as $key => $value){
      $clean_attributes[$key] = $database->mysql_prep($value);
    }
    return $clean_attributes;
  }
  
  public function save() {
    return isset($this->id) ? $this->update() : $this->create();
  }
  

  
   public function create(){
    global $database;
    $attributes = $this->sanitized_attributes();
    $sql = "INSERT INTO ".static::$table_name." (";
    $sql .= join(", ", array_keys($attributes));
    $sql .= ") VALUES ('";
    $sql .= join("', '", array_values($attributes));
    $sql .= "')";
        if($database->query($sql)){
      $this->id = $database->insert_id();
      return true;
    }else{
      return false;
    }
  }
  public function update(){
    global $database;
    $attributes = $this->sanitized_attributes();
    $attribute_pairs = array();
    foreach($attribute as $key => $value){
      $attribute_pairs[] = "{$key}='{$value}'";
    }
    $sql = "UPDATE ".static::$table_name." SET ";
    $sql .= join(", ", $attribute_pairs);
    $sql .= " WHERE id=". $database->mysql_prep($this->id);
    $database->query($sql);
    return($database->affected_rows() == 1) ? true : false;
  }
  
  public function delete(){
    global $database;
    $sql = "DELETE FROM ".static::$table_name." ";
    $sql .= "WHERE id=". $database->mysql_prep($this->id);
    $sql .= " LIMIT 1";
    $database->query();
    return ($database->affected_rows() == 1) ? true : false;
  }
}
class storie extends database_objec{

  static $table_name="stories";
  static $db_fields=array('id', 'name', 'title', 'story');
  public $id;
  public $name;
  public $title;
  public $story;
  
  
}
?>
<?php


/*
 * Counts the total number of products
 * @return   int             the total number of products
 */
function get_products_count() {
    return count(get_products_all());
}

/*
 * Returns a specified subset of products, based on the values received,
 * using the order of the elements in the array .
 * @param    int             the position of the first product in the requested subset 
 * @param    int             the position of the last product in the requested subset 
 * @return   array           the list of products that correspond to the start and end positions
 */
function get_products_subset($positionStart, $positionEnd) {
    $subset = array();
    $all = get_products_all();

    $position = 0;
    foreach($all as $product) {
        $position += 1;
        if ($position >= $positionStart && $position <= $positionEnd) {
            $subset[] = $product;
        }
    }
    return $subset;
}

/*
 * Returns the full list of products. This function contains the full list of products,
 * and the other model functions first call this function.
 * @return   array           the full list of products
 */

require_once("config.php");
require_once("products.php");
require_once("functions.php");
require_once("session.php");
require_once("database_object.php");

function get_products_all() {
   
	$products = array_reverse(storie::find_all());
    
    
    
    return $products;
}
/*
function get_products_all() {
   

    require_once(SITE_ROOT. "/inc/database.php");
    
    try {
        $results = $db->query("SELECT title, story FROM stories");
    } catch (Exception $e) {
        echo "Data could not be retrieved from the database.";
        exit;
    }

    $products = $results->fetchAll(PDO::FETCH_ASSOC);    

    return array_reverse($products);
}
*/



?>