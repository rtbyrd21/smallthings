<?php require_once("../includes/initialize.php"); ?>
<?php //if (!$session->is_logged_in()){redirect_to("login.php");} ?>
<?php
$yes = ($_GET['id']);
$sql = "DELETE FROM stories WHERE id = $yes";
$result_set = $database->query($sql);
if($database->query($sql)){redirect_to('list-stories.php');}
?><?php //if ($session->is_logged_in()){redirect_to("login.php");} ?>








<?php if(isset($database)) { $database->close_connection(); } ?>