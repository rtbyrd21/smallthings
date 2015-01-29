<?php

//Database connection
$connection = mysql_connect(DB_SERVER, DB_USER, DB_PASS);
if(!$connection){
  die("Database connection failed: " . mysql_error());
}

//Select database
$db_select = mysql_select_db(DB_NAME, $connection);
if (!db_select){
 die("Database selection failed: " . mysql_error());
}

//Database query
$sql = "SELECT * FROM subjects";
$result = mysql_query($sql, $connection);
if(!result){
  die("Database query failed: " . mysql_error());
}

//Use returned data
while($row = mysql_fetch_array($result)){
//output data
}

//Close connection
if(isset($connection)){
  mysql_close($connection);
  unset($connection);
}


?>

