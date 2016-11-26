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
<!-- This drop downlist -->
<link href="country/dist/css/bootstrap-formhelpers.min.css" rel="stylesheet">
 <link href="country/dist/css/bootstrap-formhelpers.css" rel="stylesheet">
 </head>


<nav>
    <div>
        <div class="nav-wrapper">
				
            <ul>
                <li id="brand-logo"><a href="index.php">Home</a></li>
				<li><a href="#">PRODUCT REVIEWS</a></li>
					<?php 
					session_start();
					if(isset($_SESSION["email"]) &&  isset($_SESSION["password"]))
					{
					echo "<li><a href='../Controller/logout.php'>LOG OUT</a></li>";
					echo "<li><a href='createUserProfile.php'>Create Profile</a></li>";
					echo "Welcome ".$_SESSION['email'];

					}
					else if (isset($_COOKIE["email"]) &&  isset($_COOKIE["password"]))
					{
					echo "<li><a href='../Controller/logout.php'>LOG OUT</a></li>";
					echo "<li><a href='createUserProfile.php'>Create Profile</a></li>";
					echo "Welcome ".$_COOKIE["email"];

					}
					else
					{
					 
					echo " <li><a href='LogIn.php'>LOGIN</a></li>";
					echo "<li><a href='registerUser.php'>SIGNUP</a></li>";
					}
					
					echo"<br/>";
				
					echo "<li><a href='productMain.php'>Manage Product</a></li>";
					echo "<li><a href='categoryMain.php'>Manage Category</a></li>";
					echo "<li><a href='skinMain.php'>Manage skinType</a></li>";
                    
					?>
               
               
                

            </ul>
			
			
        </div>
</nav>