<!DOCTYPE html>


<?php
include 'header.php';
require_once('../model/database.php');
require_once('../model/product.php');
require_once('../model/productDB.php');
//include_once('uploadImages.php');


//update Product Type Detail
$newProductName = filter_input(INPUT_POST, 'newProductName');
$updateProductId= filter_input(INPUT_POST, 'oldProductId');
ProductDB::updateProduct($newProductName,$updateProductId);


//Add Product
$productName = filter_input(INPUT_POST, 'productName');//get product info from user input
$ingredients = filter_input(INPUT_POST, 'ingredients');
$country =     filter_input(INPUT_POST, 'country');
//$images = $_FILES['images'];
//getcontentImg($images);


if(isset($_FILES['images']['name'])){
	
$uploadFileDB = ($_FILES['images']['name']);
$uploaddir ='C:/xampp/htdocs/contentImg/';
$uploadfile = $uploaddir . basename($_FILES['images']['name']);

$product = new Product(" ",$productName,$ingredients," ",$country,$uploadFileDB," ");
ProductDB::addProduct($product);

move_uploaded_file($_FILES['images']['tmp_name'], $uploadfile);

}






//Get Product Detail
$products = ProductDB::getProduct();

//Delete Product
$delete = filter_input(INPUT_POST, 'productId', 
            FILTER_VALIDATE_INT);
ProductDB::deleteProduct($delete);



?>

<h3> Manage Product </h3>
<form action="addProduct.php" method="post"
                          id="add_product_form">
                    
                    <input type="submit" value="Add Product">
                </form>
 <table>
 <?php 	foreach ($products as $product){ ?>
 
 <tr>
 
 <td>
 <?php echo $product->getProductName(); echo "<br>";?>
 <img src="http://localhost/contentImg/<?php echo $product->getImage(); ?>"> </img>
 </td>
  
                
				
                <td><form action="productMain.php" method="post"
                          id="delete_product_form">
                    
                    <input type="hidden" name="productId"
                           value="<?php echo $product->getProductId(); ?>">
                    <input type="submit" value="Delete">
                </form></td>
				
				<td><form action="updateProductForm.php" method="post"
                          id="update_product_form">
						  
					     <input type="hidden" name="productId"
                           value="<?php echo $product->getProductId(); ?>">
                    <input type="submit" value="Update">
                </form></td>

 
 </tr>
 
 
 
 <?php }?>
 
 
 </table>
 <script>
    $(document).ready(function () {
        $('select').material_select();
    });
</script>
<?php include 'footer.php' ?>

 



        
	
	
  