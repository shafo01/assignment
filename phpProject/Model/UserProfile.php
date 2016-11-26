<?php
class UserProfile {

    private $userId;
	private $firstName;
    private $lastName;
    private $ethnic;
	private $dob;
	private $country;
    private $state;
	private $loginId;

    public function __construct($loginId,  $firstName,$lastName, $ethnic, $dob, $country) {
        $this->firstName  = $firstName;
		$this->lastName   = $lastName;
		$this->loginId   = $loginId;
        $this->ethnic = $ethnic;
		$this->dob = $dob;
		$this->country   = $country;
        //$this->state = $state;
		
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function setLastName($value) {
        $this->lastName = $value;
    }

    public function getEthnic() {
        return $this->ethnic;
    }

    public function setEthnic($value) {
        $this->ethnic = $value;
    }
	
	
    public function getDOB() {
        return $this->dob;
    }

    public function setDOB($value) {
        $this->dob = $value;
    }
	
	public function getFirstName() {
        return $this->firstName;
    }

    public function setFirstName($value) {
        $this->firstName = $value;
    }
	
	public function getUserId() {
        return $this->userId;
    }

    public function setUserId($value) {
        $this->userId = $value;
    }
	
	public function getCountry() {
        return $this->country;
    }

    public function setCountry($value) {
        $this->country = $value;
    }
	
	public function getState() {
        return $this->state;
    }

    public function setState($value) {
        $this->state = $value;
    }
	
		
	public function getLoginId() {
        return $this->loginId;
    }

    public function setLoginId($value) {
        $this->loginId = $value;
    }
	

}
?>