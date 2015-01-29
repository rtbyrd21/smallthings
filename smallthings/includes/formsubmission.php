<?php

require_once("../includes/config.php");
require_once("../includes/database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  mysql_select_db( DB_NAME ) or die( 'Error'. mysql_error() );
  $name = $_POST['name']; 
  $email = $_POST['email'];
  $story = $database->mysql_prep($_POST['story']);

  if($name == "" OR $email == "" OR $story == ""){
    $error_message = "You must specify a value for name, email and story.";
  }
  foreach($_POST as $value){
      if( stripos($value, 'Content-Type:') !== FALSE){
        $error_message = "There was a problem with your submission.";
      }
  }
  if ($_POST["address"] != "") {
    $error_message = "There was a problem with your submission.";
  }

  if (!isset($error_message)){
    $sql = "INSERT INTO submitted (name, email, story) VALUES ('$name', '$email', '$story')";

    if (!mysql_query($sql)) {
      die('Error: ' . mysql_error());
    }
  }

  if (isset($error_message)){
    echo $error_message;
  }else{?>
  <h1>Thank you!</h1>
  <?php }} ?>