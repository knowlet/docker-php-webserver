<?php
try {
	$dbh = new PDO('mysql:host=db;dbname=dbdata', 'dbuser', 'dbpasswd');
	echo 'Connected';
	$dbh = null;
} catch (PDOException $e) {
	print "Error!: " . $e->getMessage() . "<br/>";
	die();
}
?>
