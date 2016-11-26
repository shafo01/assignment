<?php
class SkinType {
    private $skinTypeId;
    private $skinType;
	

    public function __construct($skinTypeId, $skinType) {
        $this->skinTypeId  = $skinTypeId;
		$this->skinType  = $skinType;
		
		
    }

    public function getSkinTypeId() {
        return $this->skinTypeId;
    }

    public function setSkinTypeId($value) {
        $this->skinTypeId = $value;
    }

    public function getSkinType() {
        return $this->skinType;
    }

    public function setSkinType($value) {
        $this->skinType = $value;
    }
	
	
   
}
?>