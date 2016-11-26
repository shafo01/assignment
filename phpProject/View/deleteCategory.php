<?php
include 'header.php';
	
require_once('../model/CategoryDB.php');

$delete = filter_input(INPUT_POST, 'categoryId', 
            FILTER_VALIDATE_INT);

header("Location:categoryMain.php");

		
			
CategoryDB::deleteCategory($delete);


include 'footer.php';
		

?>