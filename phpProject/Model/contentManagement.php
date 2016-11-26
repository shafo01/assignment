<?php
require_once('database.php');


class contentManagement{
	

public static function getRole(){
$db = DataBaseConnection::createDataBaseConnection();
$query = 'SELECT * FROM role';
$statement = $db->prepare($query);
$statement->execute();
$role = $statement->fetchAll();
$statement->closeCursor();
return $role;

}


public static function getSkinType(){
$db = DataBaseConnection::createDataBaseConnection();
$query = 'SELECT * FROM skintype';
$statement = $db->prepare($query);
$statement->execute();
$skinType = $statement->fetchAll();
$statement->closeCursor();
return $skinType;

}




}





?>