<?php

if(isset($_POST['fname']) && isset($_POST['lname'])
&&isset($_POST['username']) && isset($_POST['ethnicity'])
&& isset($_POST['dob']) && isset($_POST['password'])
&& isset($_POST['email']) && isset($_POST['country']))
{
echo $_POST['fname'];
echo $_POST['lname'];
echo $_POST['username'];
echo $_POST['ethnicity'];
echo $_POST['dob'];
echo $_POST['password'];
echo $_POST['email'];
echo $_POST['country'];

require_once "validator.php";
$validate_obj = new validator;
$firstname =  htmlspecialchars(filter_input(INPUT_POST, 'fname'));
$lastname =  htmlspecialchars(filter_input(INPUT_POST, 'lname'));
$username =  htmlspecialchars(filter_input(INPUT_POST, 'username'));
$ethnicity =  htmlspecialchars(filter_input(INPUT_POST, 'ethnicity'));
$dob =  htmlspecialchars(filter_input(INPUT_POST, 'dob'));
$password =  htmlspecialchars(filter_input(INPUT_POST, 'password'));
$email =  htmlspecialchars(filter_input(INPUT_POST, 'email'));
$country =  htmlspecialchars(filter_input(INPUT_POST, 'country'));


$error = "";
if($validate_obj->validate_name($firstname))
{

}
else
{
$error = $error."First name entered is invalid. <br/>";
}




if($validate_obj->validate_name($lastname))
{

}
else
{
$error = $error."Last name entered is invalid. <br/>";
}

if($validate_obj->validateUserName($username))
{

}
else
{
$error = $error."Username entered is invalid. <br/>";
}

if($validate_obj->validatePassword($password))
{

}
else
{
$error = $error."Password entered is invalid. <br/>";
}


if($validate_obj->val_email($email))
{

}
else
{
$error = $error."Email entered is invalid. <br/>";
}

if($error =="")
{
require_once "../Model/UserProfile.php";
require_once "../Model/userLogin.php";

//$dfFunc->insertRequest( $firstname, $lastname, $postalcode,$phone, $email, $insurancetype);
$UserProfile = new UserProfile($firstname,$lastname, $ethnicity, $dob, $country);
//create object for user login
$UserLogin = new UserLogin(1, 1, 1, $userName, $password, $email)
try
{

echo "Thank you ".$firstname. " ".$lastname. ", for requesting information on our product. <br/>";
echo "We will send an email to ".$email." with detail product information";
}
catch (Exception $e)
{
echo "error";

}
}
else
{
//return to index page
 header('Location:index.php?error='.$error);
echo "fail";
// header('index.php');
}


}
/*if(isset($_POST['email']) && isset($_POST['password']))
{


 $email = htmlspecialchars($_POST['email'] );
 $password = htmlspecialchars($_POST['password']);
 

 //check if user exist
 //conncet to database
 require_once('../Model/userLoginDB.php');
  
 $dbFunc = new UserLoginDB();

 $num_login = $dbFunc->verifyLogin($email, $password);

   
   if($num_login == 1)
   {
   //valid user now create session
 createSession($email, $password);
 //print welcome message
 header("Location:../View/index.php");

   
   }
   else
   {
   //redirect to login page
   header("Location:../View/LogIn.php");
   }
   

   

}
else
{
}

   function createSession($email, $password)
   {
      session_start();
	$_SESSION['email']  = $email;
	$_SESSION['password'] = $password;
   
   }
   */
?>