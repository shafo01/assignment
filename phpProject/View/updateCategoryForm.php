
<?php

include 'header.php';
	
$category_id = filter_input(INPUT_POST, 'categoryId', FILTER_VALIDATE_INT);

?>

 <div>
    <div style="width: 50%;margin: 0 auto">
        <h2>Update Product</h2>

<form class="col s6" action="categoryMain.php" method="post" Id="update_category_form">
 <div class="row">
<div class="input-field col s12">
<label>Category Name</label>
<input type="text" name="newCategoryType"/>
</div>
</div>
<button class="btn waves-effect waves-light" type="submit" name="action">Update
               
            </button>
<input type="hidden" name="oldCategoryId"
                           value="<?php echo  $category_id; ?>">
</form>

</div>
</div>

<?php
		include 'footer.php';
		?>
