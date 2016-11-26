<?php

include 'header.php'; 
?>
 <div>
    <div style="width: 50%;margin: 0 auto">
	<h2>Add Skin Type Detail</h2>
<form class="col s6" action="skinMain.php" method="post" Id="add_skinType_form">
  <div class="row">
                <div class="input-field col s12">
<input type="text" name="skinTypeName"/>
</div>
</div>

<button class="btn waves-effect waves-light" type="submit" name="action">Add Skin Type
               
            </button>
</form>
</div>
</div>
<?php

include 'footer.php'; 
?>