<?php
include 'header.php';
require_once('../model/database.php');
require_once('../model/skinType.php');
require_once('../model/skinTypeDB.php');


//update skin Type Detail
$newSkinType = filter_input(INPUT_POST, 'newSkinType');
$updateSkinId = filter_input(INPUT_POST, 'oldSkinTypeId');
SkinTypeDB::updateSkinType($newSkinType,$updateSkinId);


//Add Skin Type Detail
$skinType_name = filter_input(INPUT_POST, 'skinTypeName');//get skin Name from user input

$skinType = new SkinType("",$skinType_name);
SkinTypeDB::addSkinType($skinType);

//Get skin Type Detail
$skinTypes = SkinTypeDB::getSkinType();

//Delete Skin Type Detail
$delete = filter_input(INPUT_POST, 'skinTypeId', 
            FILTER_VALIDATE_INT);
SkinTypeDB::deleteSkinType($delete);



?>

<h3> Manage Skin Type Detail </h3>
<form action="addSkinType.php" method="post"
                          id="add_skinType_form">
                    
                    <input type="submit" value="Add Skin Type">
                </form>
 <table>
 <?php 	foreach ($skinTypes as $skinTypeName){ ?>
 
 <tr>
 
 <td>
 <?php echo $skinTypeName->getSkinType(); ?>
 </td>
 
  
                
				
                <td><form action="skinMain.php" method="post"
                          id="delete_skinType_form">
                    
                    <input type="hidden" name="skinTypeId"
                           value="<?php echo $skinTypeName->getSkinTypeId(); ?>">
                    <input type="submit" value="Delete">
                </form></td>
				
				<td><form action="updateSkinTypeForm.php" method="post"
                          id="update_skinType_form">
						  
					     <input type="hidden" name="skinTypeId"
                           value="<?php echo $skinTypeName->getSkinTypeId(); ?>">
                    <input type="submit" value="Update">
                </form></td>

 
 </tr>
 
 
 
 <?php }?>
 
 </table>
 
 <?php
		include 'footer.php';
		?>
 



        
	
	
  