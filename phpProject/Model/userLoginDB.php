<?php
 require_once('database.php');
class UserLoginDB {

    public static function getUserLogin() {
        $db = DataBaseConnection::createDataBaseConnection();
        $query = 'SELECT * FROM userlogin
                  ';
        $statement = $db->prepare($query);
        $statement->execute();
        
        $loginDetails = array();
        foreach ($statement as $row) {
            $login = new UserLogin($row['loginId'], $row['roleID'],$row['userId'],
                                     $row['userName'], $row['password']);
            $loginDetails[] = $login;
        }
        return $loginDetails;
    }

    public static function getUserLoginByRole($roleID) {
       $db = DataBaseConnection::createDataBaseConnection();
       $query = 'SELECT * FROM userlogin
                  WHERE roleID = :roleID';    
        $statement = $db->prepare($query);
        $statement->bindValue(':roleID', $roleID);
        $statement->execute();    
        $row = $statement->fetch();
        $statement->closeCursor();    
        $login = new UserLogin($row['loginId'], $row['roleID'],$row['userId'],
                                     $row['userName'], $row['password']);
        return $login;
    }
	
	 public static function getUserLoginByUserID($userID) {
       $db = DataBaseConnection::createDataBaseConnection();
       $query = 'SELECT * FROM userlogin
                  WHERE userId = :userID';    
        $statement = $db->prepare($query);
        $statement->bindValue(':userID', $userID);
        $statement->execute();    
        $row = $statement->fetch();
        $statement->closeCursor();    
        $login = new UserLogin($row['loginId'], $row['roleID'],$row['userId'],
                                     $row['userName'], $row['password']);
        return $login;
    }
	
	public function verifyLogin($email, $password)
	{
	
	$db = DataBaseConnection::createDataBaseConnection();
	$query = 'SELECT count(loginId) as num_id FROM userlogin
                  WHERE email = :email and password = :password';
				  
	
	$statement1 = $db->prepare($query);
	$statement1->bindValue(':email', $email);
	$statement1->bindValue(':password', $password);
	$statement1->execute();
	$login = $statement1->fetch();
	$num_login = $login['num_id'];
	$statement1->closeCursor();
	return $num_login;

	}
	
		public function verifyEmailExist($email)
	{
	
	$db = DataBaseConnection::createDataBaseConnection();
	$query = 'SELECT count(loginId) as num_id FROM userlogin
                  WHERE email = :email';
				  
	
	$statement1 = $db->prepare($query);
	$statement1->bindValue(':email', $email);
	$statement1->execute();
	$login = $statement1->fetch();
	$num_login = $login['num_id'];
	$statement1->closeCursor();
	return $num_login;

	}
	
	public static function registerUser($UserLogin) {
        $db = DataBaseConnection::createDataBaseConnection();

        $username = $UserLogin->getUserName();
        $email = $UserLogin->getEmail();
        $password =   $UserLogin->getPassword();
		$roleId = $UserLogin->getroleID();

        $query = 'INSERT INTO userlogin
                     (roleID, username, email, password)
                  VALUES
                     (:roleID, :username, :email, :password)';
        $statement = $db->prepare($query);
        $statement->bindValue(':roleID', $roleId);
        $statement->bindValue(':username', $username);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $statement->closeCursor();
    }
	
		public function getUserId($email)
	{
	
	$db = DataBaseConnection::createDataBaseConnection();
	$query = 'SELECT loginId FROM userlogin
                  WHERE email = :email';
				  
	
	$statement1 = $db->prepare($query);
	$statement1->bindValue(':email', $email);
	$statement1->execute();
	$login = $statement1->fetch();
	$loginId = $login['loginId'];
	$statement1->closeCursor();
	return $loginId;

	}
	
	public function updateWithToken($loginId, $token)
	{
	$db = DataBaseConnection::createDataBaseConnection();
	$query = 'UPDATE userlogin  SET tokenCode=:token WHERE loginId=:loginId';
	$statement1 = $db->prepare($query);
	$statement1->bindValue(':token', $token);
	$statement1->bindValue(':loginId', $loginId);
	$statement1->execute();
	$statement1->closeCursor();
	}
	
	public function updatePassword($password, $loginId, $token)
	{
	$db = DataBaseConnection::createDataBaseConnection();
	$query = 'UPDATE userlogin  SET password=:password WHERE loginId=:loginId and tokenCode=:token';
	$statement1 = $db->prepare($query);
	$statement1->bindValue(':password', $password);
	$statement1->bindValue(':loginId', $loginId);
	$statement1->bindValue(':token', $token);
	
	$statement1->execute();
	$statement1->closeCursor();
	}
	
	
	
	
	
}
?>