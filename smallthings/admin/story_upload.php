<?php require_once("../includes/initialize.php");
if (!$session->is_logged_in()){redirect_to("login.php");}
if(isset($_POST['submit'])) {
    $story = new stories();
    $story->name = $_POST['name'];
    $story->story = $_POST['story'];
    if($story->save()){redirect_to('list-stories.php');}
	else{ echo "did not work";}}?>
  <?php include_layout_template('admin_header.php'); ?>
<?php include_layout_template('admin_nav.php'); ?>
  

<div class="row">
  </br>
  <div class="large-6 medium-6 columns" >
  <h2>Story Upload</h2>
  <?php echo output_message($message); ?>
  <form action="story_upload.php" enctype="multipart/form-data" method="POST">
    <label>Name:</label>
    <input type="text" name="name" value="" />
    <br/>
    <label>Story:</label>
    <textarea type="text" name="story" value="" /></textarea>
    <input class="button" type="submit" name="submit" value="UPLOAD" />
</form>
<ul>
  
     
    </ul>
  </div>


<?php
  //Find all photos
  $submitted = array_reverse(submitted::find_all());
?>


<div class="large-6 medium-6 columns" >
  <h2>Stories submitted</h2>
  <br>
<table class="bordered">
  <tr>
    <th>name</th>
    <th>Story</th>
    <th>&nbsp;</th>
  </tr>
<?php foreach($submitted as $story): ?>
  <tr>
    <td><?php echo $story->name; ?></td>
    <td><?php echo $story->story; ?></td>
    <td><a class="button success alert" href="delete_story.php?id=<?php  ?>">Delete</a></td>
 </tr>
<?php endforeach; ?>
</table>
<br />
</div>


</div>