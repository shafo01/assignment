<?php
class UserLogin {
    private $loginId;
    private $roleID;
    private $userName;
	private $password;
	private $email;

    public function __construct( $roleID, $userName, $password, $email) {
        //$this->loginId  = $loginId;
		$this->roleID   = $roleID;
        $this->userName = $userName;
		$this->password = $password;
		$this->email = $email;
		
    }

    public function getroleID() {
        return $this->roleID;
    }

    public function setroleID($value) {
        $this->roleID = $value;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function setUserName($value) {
        $this->userName = $value;
    }
	
	
    public function getPassword() {
        return $this->password;
    }

    public function setPassword($value) {
        $this->password = $value;
    }
	
	public function getLoginId() {
        return $this->loginId;
    }

    public function setLoginId($value) {
        $this->loginId = $value;
    }

	
	public function getEmail() {
        return $this->email;
    }

    public function setEmail($value) {
        $this->email = $value;
    }
	
	
}
?>