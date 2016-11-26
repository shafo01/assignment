<?php
	$password = htmlspecialchars($_POST['password']);
	$c_password = htmlspecialchars($_POST['c_password']);
	$id = htmlspecialchars($_POST['id']);
	$code = htmlspecialchars($_POST['token']);
	
	echo $password;
	echo $c_password;
	echo $code;
	echo $id;
if(isset($_POST['c_password']) && isset($_POST['password']) && isset($_POST['token']) && isset($_POST['id']) )
{
echo "in";
	require_once "validator.php";
	$validate_obj = new validator;


	$password = htmlspecialchars($_POST['password']);
	$c_password = htmlspecialchars($_POST['c_password']);
	$id = htmlspecialchars($_POST['id']);
	$code = htmlspecialchars($_POST['token']);
 
	$error = "";
	
	if($password==$c_password)
	{
	}
	else
	{
	$error = $error."Password and Confirmation Password do not match <br/>";
	}
	
	if($validate_obj->validatePassword($password))
	{

	}
	else
	{
	$error = $error."Password entered is invalid. <br/>";
	}

 

 //check if user exist
 //conncet to database
 require_once('../Model/userLoginDB.php');
  
 $dbFunc = new UserLoginDB();
 
 if($error=="")
 {

 $dbFunc->updatePassword($password, $id, $code);
 header("Location:../View/resetPassword.php?error=Password has been reset. <br/> You can log in now");
 
 }
 else
 {
header("Location:../View/resetPassword.php?error=".$error);
 
 }
 }

   


?>