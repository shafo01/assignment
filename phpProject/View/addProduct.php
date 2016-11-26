

<?php include 'header.php'; 
function populateCountryDropDown()
{
    $jsonStr = file_get_contents('res/countries.json');
    $countries = json_decode($jsonStr, true);
    //print_r($countries[0]['countryName']);
    foreach ($countries as $country) {
        echo "<option value=" . $country['countryShortCode'] . ">" . $country['countryName'] . "</option>";
    }


}

function populateCityDropDown($country){

}


?>

<link href="country/dist/css/bootstrap-formhelpers.min.css" rel="stylesheet">
 <link href="country/dist/css/bootstrap-formhelpers.css" rel="stylesheet">
 
      
 <div>
    <div style="width: 50%;margin: 0 auto">
        <h2>Add Product</h2>

    
    <form  class="col s6" action="productMain.php" method="post" id="add_product_form"  enctype='multipart/form-data'>
        <input type="hidden" name="action" value="add_product" />

         <div class="row">
                <div class="input-field col s12">
				
        <label>Product Name:</label>
        <input type="text" name="productName">
           </div>
            </div>
			
			<div class="row">
                <div class="input-field col s12">
		
        <label>Ingredients:</label>
        <input type="text" name="ingredients">
        </div>
		</div>
		
		<div class="row">
		 <div class="input-field col s12">
                    <select id="country" name="country">
                        <?php populateCountryDropDown() ?>
                    </select>
                    <label for="ABC">Country</label>
                </div>
				</div>
		
		<div class="row">
     
		
		<div><label><h6>Images:</h6></label></div>
		
        <input type="file" name="images" id="images"/>
		
        </div>
		
		<button class="btn waves-effect waves-light" type="submit" name="action">Add Product
               
            </button>
			

        
    </form>
	</div>
</div>
	
	<?php include 'footer.php'?>
	