<?php
require_once("../includes/initialize.php");
if (!$session->is_logged_in()){redirect_to("login.php");}
?>

<?php
  //Find all photos
  $stories = array_reverse(stories::find_all());
?>
<?php include_layout_template('admin_header.php'); ?>
<?php include_layout_template('admin_nav.php'); ?>
<div class="row">
<div class="large-12 medium-12 columns" >
<?php echo output_message($message); ?>
  <h2>Stories currently on web page</h2>
<table class="bordered">
  <tr>
    <th>Name</th>
    <th>Story</th>
    <th>&nbsp;</th>
  </tr>
<?php foreach($stories as $story): ?>
  <tr>
    <td><?php echo $story->name; ?></td>
    <td><?php echo $story->story; ?></td>
    <td><a class="button success alert" href="delete_story.php?id=<?php echo $story->id; ?>">Delete</a></td>
    
  </tr>
<?php endforeach; ?>
</table>
<br />



  
  </div>
  </div>
<?php include_layout_template('admin_footer.php'); ?>
   <script>
    $(document).foundation();
     </script>
<br/>
<br/>
<br/>
<br/>