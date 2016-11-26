<?php

require_once('database.php');

class Category {
    private $categoryId;
    private $categoryType;
	

    public function __construct($categoryType,$categoryId) {
        
		$this->categoryType  = $categoryType;
		$this->categoryId  = $categoryId;
		
    }
	


    public function getCategoryId() {
        return $this->categoryId;
    }

    public function setCategoryId($value) {
        $this->categoryId = $value;
    }

    public function getCategoryType() {
        return $this->categoryType;
    }

    public function setCategoryType($value) {
        $this->categoryType = $value;
    }
	
	
   
}
?>