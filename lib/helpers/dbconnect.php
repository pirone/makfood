<?php
function dbconnect() {
	$db = new PDO ( 'mysql:host=localhost;dbname=makfood;charset=utf8', 'root', '' );
	$db->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$db->setAttribute ( PDO::ATTR_EMULATE_PREPARES, false );
	
	return $db;
}
function dbclose() {
	$db = null;
}
?>