<?php
require_once("../includes/initialize.php");
if (!$session->is_logged_in()){redirect_to("login.php");}
?>

<?php
  //Find all photos
  $photos = photograph::find_all();
?>

<?php include_layout_template('admin_header.php'); ?>
<?php echo output_message($message); ?>
  <h2>Photographs</h2>
<table class="bordered">
  <tr>
    <th>Image</th>
    <th>Filename</th>
    <th>Caption</th>
    <th>Size</th>
    <th>Type</th>
    <th>&nbsp;</th>
  </tr>
<?php foreach($photos as $photo): ?>
  <tr>
    <td><img src="../<?php echo $photo->image_path(); ?>" width="100" /></td>
    <td><?php echo $photo->filename; ?></td>
    <td><?php echo $photo->caption; ?></td>
    <td><?php echo $photo->size; ?></td>
    <td><?php echo $photo->type; ?></td>
    <td><a href="delete_photo.php?id=<?php echo $photo->id; ?>">Delete</a></td>
    
  </tr>
<?php endforeach; ?>
</table>
<br />
<a href="photo_upload.php">Upload a new photograph</a>

<?php include_layout_template('admin_footer.php'); ?>