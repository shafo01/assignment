<?php
class Role {
    private $roleID;
    private $roleName;
	private $status;

    public function __construct($roleID, $roleName, $status) {
        $this->roleID   = $roleID;
        $this->roleName = $roleName;
		$this->status = $status;
		
    }

    public function getroleID() {
        return $this->roleID;
    }

    public function setroleID($value) {
        $this->roleID = $value;
    }

    public function getRoleName() {
        return $this->rolename;
    }

    public function setRoleName($value) {
        $this->roleName = $value;
    }
	
	
    public function getStatus() {
        return $this->status;
    }

    public function setStatus($value) {
        $this->status = $status;
    }
}
?>