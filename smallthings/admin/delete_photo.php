<?php require_once("../includes/initialize.php"); ?>


<?php if (!$session->is_logged_in()){redirect_to("login.php");} ?>

<?php

$yes = ($_GET['id']);
$sql = "DELETE FROM photographs WHERE id = $yes";
$result_set = $database->query($sql);
?>

<?php if ($session->is_logged_in()){redirect_to("login.php");} ?>

<?php
//  if(empty($_GET['id'])){
//  $session->message("No photograph ID was provided.");
//  redirect_to('index.php');
//  }
//
//  $photo = photograph::find_by_id($_GET['id']);
//  if($photo && $photo->destroy()) {
//  $session->message("The photo was deleted.");
//  redirect_to('list_photos.php');
//} else {
//  $session->message("The photo could not be deleted.");
//  redirect_to('index.php');
//}
?>






<?php if(isset($database)) { $database->close_connection(); } ?>