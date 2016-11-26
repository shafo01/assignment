<?php
require_once('database.php');

class SkinTypeDB {

    public static function getSkinType() {
        $db = DataBaseConnection::createDataBaseConnection();
        $query = 'SELECT * FROM skintype
                  ';
        $statement = $db->prepare($query);
        $statement->execute();
        
        $skinTypes = array();
        foreach ($statement as $row) {
            $skinType = new SkinType($row['skinTypeId'], $row['skinType']);
            $skinTypes[] = $skinType;
        }
        return $skinTypes;
    }

    public static function getSkinTypeById($skinTypeId) {
       $db = DataBaseConnection::createDataBaseConnection();
       $query = 'SELECT * FROM skintype
                  WHERE skinTypeId = :skinTypeId';    
        $statement = $db->prepare($query);
        $statement->bindValue(':skinTypeId', $skinTypeId);
        $statement->execute();    
        $row = $statement->fetch();
        $statement->closeCursor();    
        $skinType = new SkinType($row['skinTypeId'], $row['skinType']);
        return $skinType;
    }
	
	
		public static function addSkinType($skinType) {
        $db = DataBaseConnection::createDataBaseConnection();

        
        $skinType = $skinType->getSkinType();
      

        $query = 'INSERT INTO skintype
                     (skinType)
                  VALUES
                     (:skinType)';
        $statement = $db->prepare($query);
        $statement->bindValue(':skinType', $skinType);
        $statement->execute();
        $statement->closeCursor();
    }
	
	  public static function deleteSkinType($skinTypeId) {
       $db = DataBaseConnection::createDataBaseConnection();
        $query = 'DELETE FROM skintype
                  WHERE skinTypeId = :skinTypeId';
        $statement = $db->prepare($query);
        $statement->bindValue(':skinTypeId', $skinTypeId);
        $statement->execute();
        $statement->closeCursor();
    }
	
	public static function updateSkinType($skinType, $oldSkinTypeId )
{
    $db = DataBaseConnection::createDataBaseConnection();
    $query = 'UPDATE skintype
                set skinType = :skinType
             where skinTypeId = :oldSkinTypeId';
			  
                 
    $statement = $db->prepare($query);
    $statement->bindValue(':skinType', $skinType);
	$statement->bindValue(':oldSkinTypeId', $oldSkinTypeId);
    $statement->execute();
    $statement->closeCursor();
}
	
	 
	
	
	
	
}
?>