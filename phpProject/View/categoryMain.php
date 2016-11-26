<?php
include 'header.php';
require_once('../model/database.php');
require_once('../model/category.php');
require_once('../model/CategoryDB.php');


 

$category_name = filter_input(INPUT_POST, 'categoryName');

$newCategoryType = filter_input(INPUT_POST, 'newCategoryType');
$updateCategoryId = filter_input(INPUT_POST, 'oldCategoryId');

CategoryDB::updateCategory($newCategoryType,$updateCategoryId);



$category = new Category($category_name,"");
CategoryDB::addCategory($category);

$categories = CategoryDB::getCategory();

//$categories = CategoryDB::getSkinType();








?>

     <h3> Add Category </h3>
	 
	 <form action="addCategory.php" method="post"
                          id="add_category_form">
                    
                    <input type="submit" value="Add Category">
                </form>

	 
        <table>
           
            <?php foreach ($categories as $category) : ?>
            <tr>
                <td><?php echo $category->getCategoryType(); ?></td>
                
                
                <td><form action="deleteCategory.php" method="post"
                          id="delete_category_form">
                    
                    <input type="hidden" name="categoryId"
                           value="<?php echo $category->getCategoryId(); ?>">
                    <input type="submit" value="Delete">
                </form></td>
				
				<td><form action="updateCategoryForm.php" method="post"
                          id="update_category_form">
						  
					     <input type="hidden" name="categoryId"
                           value="<?php echo $category->getCategoryId(); ?>">
                    <input type="submit" value="Update">
                </form></td>
				
				
            </tr>
            <?php endforeach; ?>
        </table>
		<?php
		include 'footer.php';
		?>
	
	
	
  