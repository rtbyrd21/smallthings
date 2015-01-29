<?php
require_once("../includes/initialize.php");
if (!$session->is_logged_in()){redirect_to("login.php");}
if ($session->is_logged_in()){redirect_to("story_upload.php");}
$user = User::find_by_id(1);
?>

<?php include_layout_template('admin_header.php'); ?>

<div class="row">


  <div class="large-12 medium-12 columns" >
    <h2>Welcome <?php echo $user->full_name();?></h2>
  <?php echo output_message($message); ?>
    <ul>
      <li><a href="story_upload.php">Story Upload</a></li>
      <li><a href="list-stories.php">Story List (Live on site)</a></li>
      <li><a href="logfile.php">View log file</a></li>
      <li><a href="logout.php">logout</a></li>
      <br/>
      ////For later use////
      <li><a href="photo_upload.php">Photo Upload</a></li>
      
      <li><a href="list-photos.php">Photo List</a></li>
      
    </ul>
<?php include_layout_template('admin_footer.php'); ?>
    </div>
  </div>