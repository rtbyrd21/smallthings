<?php
require_once("../includes/initialize.php");
if (!$session->is_logged_in()){redirect_to("login.php");}
?>

<?php
  $max_file_size = 1048576; //10MB
  
  if(isset($_POST['submit'])) {
    $photo = new photograph();
    $photo->caption = $_POST['caption'];
    $photo->attach_file($_FILES['file_upload']);
    if($photo->save()){
      redirect_to('../public/admin/list-photos.php"');
    } else {
     $message = join("<br />", $photo->errors);
   }
}
//    if($photo->save()) {
//      echo "success";
//      $session->message = ("Photograph uploaded successfully.");
//      redirect_to('list_photos.php');
//    } else {
//      $message = join("<br />", $photo->errors);
//    }
  

?>

<?php include_layout_template('admin_header.php'); ?>

  <h2>Photo Upload</h2>
  <?php echo output_message($message); ?>
  <form action="photo_upload.php" enctype="multipart/form-data" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>" />
    <p><input type="file" name="file_upload" /></p>
    <p>Caption: <input type="text" name="caption" value="" /></p>
    <input type="submit" name="submit" value="Upload" />
</form>
<ul>
  
      <li><a href="list-photos.php">Photo List</a></li>
      <li><a href="logout.php">logout</a></li>
    </ul>
<?php include_layout_template('admin_footer.php'); ?>


