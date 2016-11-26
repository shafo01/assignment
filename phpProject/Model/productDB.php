<?php
require_once('database.php');

class ProductDB {

    public static function getProduct() {
        $db = DataBaseConnection::createDataBaseConnection();
        $query = 'SELECT * FROM product
                  ';
        $statement = $db->prepare($query);
        $statement->execute();
        
        $products = array();
        foreach ($statement as $row) {
            $product = new Product($row['productId'], $row['productName'],$row['ingredients'],
                                     $row['categoryId'], $row['countryOrigin'],$row['image'],$row['rating']);
            $products[] = $product;
        }
        return $products;
    }

    public static function getProductById($productId) {
       $db = DataBaseConnection::createDataBaseConnection();
       $query = 'SELECT * FROM product
                  WHERE productId = :productId';    
        $statement = $db->prepare($query);
        $statement->bindValue(':productId', $productId);
        $statement->execute();    
        $row = $statement->fetch();
        $statement->closeCursor();    
        $product = new Product($row['productId'], $row['productName'],$row['ingredients'],
                                     $row['categoryId'], $row['countryOrigin'],$row['image'],$row['rating']);
        return $product;
    }
	
	 public static function getProductByCategoryId($categoryId) {
       $db = DataBaseConnection::createDataBaseConnection();
       $query = 'SELECT * FROM product
                  WHERE categoryId = :categoryId';    
        $statement = $db->prepare($query);
        $statement->bindValue(':productId', $productId);
        $statement->execute();    
        $row = $statement->fetch();
        $statement->closeCursor();    
        $product = new Product($row['productId'], $row['productName'],$row['ingredients'],
                                     $row['categoryId'], $row['countryOrigin'],$row['image'],$row['rating']);
        return $product;
    }
	
		public static function addProduct($product) {
        $db = DataBaseConnection::createDataBaseConnection();

        
        $productName = $product->getProductName();
		$ingredients = $product->getIngredients();
		$categoryId =  $product->getCategoryId();
		$countryOrigin = $product->getcountryOrigin();
		$image = $product->getImage();
		
      

        $query = 'INSERT INTO product
                     (productName,ingredients,categoryId,countryOrigin,image)
                  VALUES
                     (:productName,:ingredients,:categoryId,:countryOrigin,:image)';
        $statement = $db->prepare($query);
        $statement->bindValue(':productName', $productName);
		$statement->bindValue(':ingredients', $ingredients);
		$statement->bindValue(':categoryId',  $categoryId);
		$statement->bindValue(':countryOrigin', $countryOrigin);
		$statement->bindValue(':image', $image);
		
        $statement->execute();
        $statement->closeCursor();
    }
	
	  public static function deleteProduct($productId) {
       $db = DataBaseConnection::createDataBaseConnection();
        $query = 'DELETE FROM product
                  WHERE productId = :productId';
        $statement = $db->prepare($query);
        $statement->bindValue(':productId', $productId);
        $statement->execute();
        $statement->closeCursor();
    }
	
	public static function updateProduct($productName, $oldProductId )
{
    $db = DataBaseConnection::createDataBaseConnection();
    $query = 'UPDATE product
             set productName = :productName
             where productId = :oldProductId';
			  
                 
    $statement = $db->prepare($query);
    $statement->bindValue(':productName', $productName);
	$statement->bindValue(':oldProductId', $oldProductId);
    $statement->execute();
    $statement->closeCursor();
}
	
	
	
	
	
}
?>