<?php

require_once('database.php');

class photograph extends database_object{

  static $table_name="photographs";
  static $db_fields=array('id', 'filename', 'type', 'caption');
  public $id;
  public $filename;
  public $type;
  public $size;
  public $caption;
  
  private $temp_path;
  protected $upload_dir="images";
  public $errors=array();
  protected $upload_errors = array(
  UPLOAD_ERR_OK  => "No errors.",
  UPLOAD_ERR_INI_SIZE => "Larger than upload_max_filesize.",
  UPLOAD_ERR_FORM_SIZE => "Larger than form MAX_FILE_SIZE.",
  UPLOAD_ERR_PARTIAL => "Partial upload.",
  UPLOAD_ERR_NO_FILE => "No file.",
  UPLOAD_ERR_NO_TMP_DIR => "No temporary directory.",
  UPLOAD_ERR_CANT_WRITE => "Can't write to disk.",
  UPLOAD_ERR_EXTENSTION => "File upload stopped by extension."  
  );
  
  public function attach_file($file){
    if(!file || empty($file) || !is_array($file)){
      $this->errors[] = "No file was uploaded.";
      return false;
    
    }else{
      //set object attributes to form parameters
      $this->temp_path = $file['tmp_name'];
      $this->filename  = basename($file['name']);
      $this->type      = $file['type'];
      $this->size      = $file['size'];
      return true;
    }
}
  
  public function save(){
    if(isset($this->id)){
      $this->update();
    }else{
      //Make sure no errors
      
      //Can't save if existing errors
      
      if(!empty($this->errors)) {return false;}
      
      if(strlen($this->caption) > 255){
        $this->errors[] = "The caption can only be 255 characters in length.";
        return false;
      }
      //Can't save without filename and temp location
      if(empty($this->filename) || empty($this->temp_path)){
        $this->errors[] = "The file location was not available.";
        return false;
      }
      //Determine target path
      $target_path = SITE_ROOT .DS. 'public' .DS. $this->upload_dir .DS. $this->filename;
      
      //Make sure file doesn't already exist
      if(file_exists($target_path)) {
        $this->errors[] = "The file {$this->filename} already exists.";
        return false;
      }
      
      //Attempt to move the file.
      if(move_uploaded_file($this->temp_path, $target_path)){
      //Success
       //Save a corresponding enrty to the database.
      if($this->create()){
          unset($this->temp_path);
          return true;
        }
      }else{
      //Failure
      $this->errors[] = "The file uploaded failed, possibly due to incorrect permissions on the upload folder.";
      return false;
      }
     
  }
}
  
    public function destroy() {
    //First remove the database entry
    if($this->delete()) {
    //then remove the file
      $target_path = SITE_ROOT.DS.'public'.DS.$this->image_path();
      return unlink($target_path) ? true : false;
    }else{
      return false;
    }
  }
  
  public function image_path(){
    return $this->upload_dir.DS.$this->filename;
  }
 

  
}

?>