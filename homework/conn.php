<?php
try {
	$db = new PDO('mysql:host = localhost, dbname= newProject', 'root','' );	
} catch (PDOException $e) {
	echo $e->getMessage(); "<br>";
	die();
  }

$db = null;

?>
