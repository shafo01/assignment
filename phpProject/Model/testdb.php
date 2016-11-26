<?php
require_once('database.php');
require_once('role.php');
require_once('roleDB.php');

$a = RoleDB::getRole();

foreach($a as $b){
	echo $b->getroleId();
	
	
}










?>