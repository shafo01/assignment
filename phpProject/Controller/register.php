<?php

require_once "validator.php";
require_once "../Model/userLogin.php";
require_once "../Model/userLoginDB.php";

$loginDB = new UserLoginDB;

 $dbFunc = new UserLoginDB();
 
 $body = "<h1>Welcome to the Reviewers </h1> <p> An account was created for you! </p>";
 $subject = "Welcome to the Reviewers! ";

if(isset($_POST['username']) &&  isset($_POST['password'])&& isset($_POST['email']) )
{

$validate_obj = new validator;
$username =  htmlspecialchars(filter_input(INPUT_POST, 'username'));
$password =  htmlspecialchars(filter_input(INPUT_POST, 'password'));
$email =  htmlspecialchars(filter_input(INPUT_POST, 'email'));
$remember = htmlspecialchars($_POST['rememberMe']);


$error = "";

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

 $num_login = $loginDB->verifyLogin($email, $password);
 
 if($num_login > 0)
 {
 $error = $error."Email already exist. <br/>";
 }

if($error =="")
{



//$dfFunc->insertRequest( $firstname, $lastname, $postalcode,$phone, $email, $insurancetype);
//create object for user login
$UserLogin = new UserLogin( 1, $username, $password, $email);

try
{
$loginDB->registerUser($UserLogin);
   //valid user now create session
 createSession($email, $password);
 sendMail($email, $username, $subject, $body);
    if($remember==true)
	{
//create cookie
	createCookie($email, $password);
	}
 //print welcome message
 header("Location:../View/index.php");

}
catch (Exception $e)
{
echo "error";

}
}
else
{
//return to index page
 header('Location:../View/registerUser.php?error='.$error);
echo "fail";
// header('index.php');
}


}


   function createSession($email, $password)
   {
      session_start();
	$_SESSION['email']  = $email;
	$_SESSION['password'] = $password;
   
   }
   
   
   function sendMail($email, $username, $subject, $body)
   {
   /**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages



$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "humberlearners@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "Password_1";

//Set who the message is to be sent from
$mail->setFrom('sharopie_01@yahoo.com', 'Shareeza Hussain');

//Set an alternative reply-to address
$mail->addReplyTo('shafeezahussain@gmail.com', 'Shafeeza H');

//Set who the message is to be sent to
$mail->addAddress($email, $username);

//Set the subject line
$mail->Subject = $subject;

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($body);

//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    //echo "Mailer Error: ".$mail->ErrorInfo;;
	return true;
} else {
    //echo "Message sent!";
	return false;
}
   
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