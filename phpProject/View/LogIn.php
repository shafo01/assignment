<?php
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
<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <link href="res/materialize/css/materialize.css" rel="stylesheet">
    <script src="res/materialize/js/materialize.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">	  
 <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
  
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script>
        $('#country').change(function(){}
        );
        $.get(
            url: 'registerUser.php',
            parameter:
            function(data) {

            });
    </script>
</head>
<body>
<?php include 'header.php' ?>
<div>
    <div style="width: 50%;margin: 0 auto">
        <h2>Sign In </h2>
		<?php 
		
		if(isset($_GET['error']))
		{
		$error = htmlspecialchars($_GET['error']);
		echo "<h5>".$error."</h5>";
		}
		?>
        <form class="col s6" method = "post" action="../Controller/verifyLogin.php">

           <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input id="email" name="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">label</i>
                    <input id="password" name="password" type="password" class="validate">
                    <label for="password">Password</label>
					
                </div>

            </div>
			
			
			 <div class="nav-wrapper">
      <a href="forgetPassword.php" class="brand-logo">Forget Password</a>
      
    </div>

          <div class="row">
               
                   
					<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox2">
            <input type="checkbox" id="checkbox2" name = "rememberMe" class="mdl-checkbox__input">
            <span class="mdl-checkbox__label">Remember Me</span>
         </label>	
                   <!-- <label for="rememberMe">Remember Me</label>-->
				   
                
            </div>
			

           
            <button class="btn waves-effect waves-light" type="submit" name="action">Sign In
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('select').material_select();
    });
</script>
<?php include 'footer.php' ?>
</body>
</html>