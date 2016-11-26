<?php
require_once('database.php');

class CategoryDB {

    public static function getCategory() {
        $db = DataBaseConnection::createDataBaseConnection();
        $query = 'SELECT * FROM category
                  ';
        $statement = $db->prepare($query);
        $statement->execute();
		
		
        
        $categories = array();
        foreach ($statement as $row) {
            $category = new Category($row['categoryType'],$row['categoryId']);
            $categories[] = $category;
        }
        return $categories;
    }

    public static function getCategoryById($categoryId) {
       $db = DataBaseConnection::createDataBaseConnection();
       $query = 'SELECT * FROM category
                  WHERE categoryId = :categoryId';    
        $statement = $db->prepare($query);
        $statement->bindValue(':categoryId', $categoryId);
        $statement->execute();    
        $row = $statement->fetch();
        $statement->closeCursor();    
        $category = new Category($row['categoryType'],$row['categoryId']);
        return $category;
    }
	
	
	public static function addCategory($categoryType) {
        $db = DataBaseConnection::createDataBaseConnection();

        
        $categoryType = $categoryType->getCategoryType();
      

        $query = 'INSERT INTO category
                     (categoryType)
                  VALUES
                     (:categoryType)';
        $statement = $db->prepare($query);
        $statement->bindValue(':categoryType', $categoryType);
        $statement->execute();
        $statement->closeCursor();
    }
	
	  public static function deleteCategory($categoryId) {
       $db = DataBaseConnection::createDataBaseConnection();
        $query = 'DELETE FROM category
                  WHERE categoryId = :categoryId';
        $statement = $db->prepare($query);
        $statement->bindValue(':categoryId', $categoryId);
        $statement->execute();
        $statement->closeCursor();
    }
	
	public static function updateCategory($categoryType, $oldCategoryId )
{
    $db = DataBaseConnection::createDataBaseConnection();
    $query = 'UPDATE category
                set categoryType = :categoryType
             where categoryId = :oldCategoryId';
			  
                 
    $statement = $db->prepare($query);
    $statement->bindValue(':categoryType', $categoryType);
	$statement->bindValue(':oldCategoryId', $oldCategoryId);
    $statement->execute();
    $statement->closeCursor();
}

}
?>