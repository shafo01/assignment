<?php
class Product {
    private $productId;
    private $productName;
	private $ingredients;
    private $categoryId;
	private $countryOrigin;
	private $image;
	private $rating;
	

    public function __construct($productId, $productName, $ingredients, $categoryId, $countryOrigin,$image, $rating) {
        $this->productId  = $productId;
		$this->productName = $productName;
		$this->ingredients = $ingredients;
        $this->categoryId = $categoryId;
		$this->countryOrigin = $countryOrigin;
		$this->image = $image;
		$this->rating = $rating;
		
    }

	public function getIngredients() {
        return $this->ingredients;
    }

    public function setIngredients($value) {
        $this->ingredients = $value;
    }
	
    public function getProductName() {
        return $this->productName;
    }

    public function setProductName($value) {
        $this->productName = $value;
    }

    public function getCategoryId() {
        return $this->categoryId;
    }

    public function setCategoryId($value) {
        $this->categoryId = $value;
    }
	
	
    public function getRating() {
        return $this->rating;
    }

    public function setRating($value) {
        $this->rating = $value;
    }
	
	public function getProductId() {
        return $this->productId;
    }

    public function setProductId($value) {
        $this->productId = $value;
    }
	
	public function getcountryOrigin() {
        return $this->countryOrigin;
    }

    public function setcountryOrigin($value) {
        $this->countryOrigin = $value;
    }
	
	public function getImage() {
        return $this->image;
    }

    public function setImage($value) {
        $this->image = $value;
    }
	
	
	
}
?>