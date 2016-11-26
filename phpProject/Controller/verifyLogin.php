<?php

if(isset($_POST['email']) && isset($_POST['password']))
{


 $email = htmlspecialchars($_POST['email'] );
 $password = htmlspecialchars($_POST['password']);
 $remember = htmlspecialchars($_POST['rememberMe']);
 

 //check if user exist
 //conncet to database
 require_once('../Model/userLoginDB.php');
  
 $dbFunc = new UserLoginDB();

 $num_login = $dbFunc->verifyLogin($email, $password);

   
   if($num_login == 1)
   {
   //valid user now create session
    createSession($email, $password);
   if($remember==true)
	{
//create cookie
	createCookie($email, $password);
	}
 //print welcome message
 header("Location:../View/index.php");

   
   }
   else
   {
   //redirect to login page
   header("Location:../View/LogIn.php?error=Please enter correct email and password.");
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
   
   function createCookie($email, $password)
   {
//$expire = time() + 3600;
$expire =  new DateTime('+1 month');
//setcookie(name, value, expire, path, domain, secure, httponly);
setcookie("email",$email,$expire->getTimestamp(),"/","localhost",false,true);
setcookie("password",$password,$expire->getTimestamp(),"/","localhost",false,true);

   }
?>