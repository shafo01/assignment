<?php
require_once('database.php');


class RoleDB{
	

public static function getRole(){
$db = DataBaseConnection::createDataBaseConnection();
$query = 'SELECT * FROM role';
$statement = $db->prepare($query);
$statement->execute();

$roles = array();
        foreach ($statement as $row) {
            $role =    new role($row['roleID'],
                                     $row['roleName'],
									 $row['status']
									 );
            $roles[] = $role;
        }
        return $roles;

}


  public static function getRoleById($roleID) {
       $db = DataBaseConnection::createDataBaseConnection();
        $query = 'SELECT * FROM role
                  WHERE roleID = :roleID';    
        $statement = $db->prepare($query);
        $statement->bindValue(':roleID', $roleID);
        $statement->execute();    
        $row = $statement->fetch();
        $statement->closeCursor();    
        $role =   new Role($row['roleID'],
                                 $row['roleName'],$row['status'] );
        return $role;
    }



}

?>