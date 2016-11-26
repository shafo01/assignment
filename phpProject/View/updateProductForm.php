
<?php
include 'header.php';

$productId = filter_input(INPUT_POST, 'productId', FILTER_VALIDATE_INT);

//echo $skinTypeId;

?>



<form action="productForm.php" method="post" Id="update_product_form">
<input type="text" name="newProductName"/>
<br/>
<input type="submit" value="Update"/>
<input type="hidden" name="oldProductId"
                           value="<?php echo  $productId; ?>">
</form>
 <script>
    $(document).ready(function () {
        $('select').material_select();
    });
</script>
<?php include 'footer.php' ?>

