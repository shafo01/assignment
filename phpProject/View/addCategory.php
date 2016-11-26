<?php

include 'header.php'; 
?>
 <div>
    <div style="width: 50%;margin: 0 auto">
        <h2>Add Category</h2>


<form class="col s6" action="categoryMain.php" method="post" Id="add_category_form">

   <div class="row">
                <div class="input-field col s12">
<input type="text" name="categoryName"/>
 </div>
            </div>

<button class="btn waves-effect waves-light" type="submit" name="action">Add Category
               
            </button>
</form>
</div>
</div>

<?php

include 'footer.php'; 
?>


