<?php
include 'header.php'; 
$skinTypeId = filter_input(INPUT_POST, 'skinTypeId', FILTER_VALIDATE_INT);

//echo $skinTypeId;

?>

 <div>
    <div style="width: 50%;margin: 0 auto">
        <h2>Add Skin Type Detail</h2>

<form class="col s6" action="skinMain.php" method="post" Id="update_skinType_form">
 <div class="row">
                <div class="input-field col s12">
				
        <label>Skin Type:</label>
<input type="text" name="newSkinType"/>
</div>
</div>
<button class="btn waves-effect waves-light" type="submit" name="action">Update
               
            </button>
<input type="hidden" name="oldSkinTypeId"
                           value="<?php echo  $skinTypeId; ?>">
</form>
</div>
</div>
<?php include 'footer.php'; ?>