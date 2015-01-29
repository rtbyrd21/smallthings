<?php
require_once(LIB_PATH. "/config.php");


$host = "mysql.vineyarddev.net";
$user = "robbyrdmysql";
$pwd = "5UpinC4n4d4";
$db = "robbyrddev";



try {
	$db = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$db->exec("SET NAMES 'utf8'");
} catch (Exception $e) {
	echo "Could not connect to the database.";
	exit;
}

/*
try {
	$db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME .";port=" . DB_PORT,DB_USER,DB_PASS);
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$db->exec("SET NAMES 'utf8'");
} catch (Exception $e) {
	echo "Could not connect to the database.";
	exit;
}
*/