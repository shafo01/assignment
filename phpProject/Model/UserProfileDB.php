<?php
require_once('database.php');


class UserProfileDB{
	

public static function getUserProfile(){
$db = DataBaseConnection::createDataBaseConnection();
$query = 'SELECT * FROM userprofile';
$statement = $db->prepare($query);
$statement->execute();

$userProfiles = array();
        foreach ($statement as $row) {
            $userProfile =    new UserProfile($row['userId'],
                                     $row['firstName'],
									 $row['lastName'],$row['ethnic'],$row['dob'],
									 $row['country'],$row['state'],$row['email']
									 
									 );
            $userProfiles[] = $userProfile;
        }
        return $userProfiles;

}


  public static function getUserProfileById($userId) {
       $db = DataBaseConnection::createDataBaseConnection();
        $query = 'SELECT * FROM userprofile
                  WHERE userId = :userId';    
        $statement = $db->prepare($query);
        $statement->bindValue(':userId', $userId);
        $statement->execute();    
        $row = $statement->fetch();
        $statement->closeCursor();    
        $userProfile =   new UserProfile($row['userId'],
                                     $row['firstName'],
									 $row['lastName'],$row['ethnic'],$row['dob'],
									 $row['country'],$row['state'],$row['email']
									 
									 );
        return $userProfile;
    }
	
	
public static function registerUser($UserProfile) {
        $db = DataBaseConnection::createDataBaseConnection();

        $firstName = $UserProfile->getFirstName();
        $lastname = $UserProfile->getLastName();
        $ethnic =   $UserProfile->getEthnic();
		$dob =      $UserProfile->getDOB();
		$country = $UserProfile->getCountry();
		$state =   $UserProfile->getState();

        $query = 'INSERT INTO userprofile
                     (firstName, lastname, ethnic, dob,country,state)
                  VALUES
                     (:firstName, :lastname, :ethnic, :dob,:country,:state)';
        $statement = $db->prepare($query);
        $statement->bindValue(':firstName', $firstName);
        $statement->bindValue(':lastname', $lastname);
        $statement->bindValue(':ethnic', $ethnic);
        $statement->bindValue(':dob', $dob);
		$statement->bindValue(':country', $country);
        $statement->bindValue(':state', $state);
        $statement->execute();
        $statement->closeCursor();
    }



}

?>