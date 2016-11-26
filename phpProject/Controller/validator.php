<?php

class validator {
	
	public function __construct() {
	}
 
    
    
    public function validate_name($input){
	
	if (empty($input)) {
      return false ;
	
	}
	
	
    else if(!preg_match("/^[a-zA-Z]+$/",$input)) { 
	 return false;
	}
	return true;
	}
	
     public function validate_telephoneNumber($number){
	 if((preg_match("/^[0-9]+$/",  $number)) && (strlen($number) == 10 || strlen($number) ==11))

	{
	return true;

	}

	else {

	return false;
	}
	  
	}
	
	
	public function val_email_groups($email_array)
	{
//define array to return
	$incorrect_emails = array();

//parse through the array with foreach
	foreach($email_array as $email)
	{
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
//email is invalid
	$incorrect_email[] = $email;

	}

	}

	return $incorrect_email;
	}

	public function val_email($email)
	{
	if(filter_var($email, FILTER_VALIDATE_EMAIL)){
	return true;
	}
	else
	{	
	return false;
	}

	}

	public function validateUserName($userName)
    {
        $userNameErr = '';
        if (empty($userName)) {
            $userNameErr = 'Username cannot be blank!';
        }
       else if (!preg_match('/^[a-zA-Z0-9_]+$/', $userName)) {
            //$userNameErr = 'Username cannot contain any special characters except underscore!';
			return false;
        }
		else
		{
		return true;
		}
        
		}

    public function validatePassword($password)
    {
        $passwordErr = '';
        if (empty($password)) {
            $passwordErr = 'Password cannot be blank!';
        }
        if (strlen($password) < 8) {
           // $passwordErr = "Your Password Must Contain At Least 8 Characters!";
		   return false;
        } elseif (!preg_match("#[0-9]+#", $password)) {
           // $passwordErr = "Your Password Must Contain At Least 1 Number!";
		   return false;
        } elseif (!preg_match("#[A-Z]+#", $password)) {
            //$passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
			return false;
        } elseif (!preg_match("#[a-z]+#", $password)) {
            //$passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
			return false;
        }
		else
		{
		//$passwordErr = "Password valid";
		return true;
		}
        //return $passwordErr;
    }
	
	public function validateZipCode($zip)
	{
	        
        if (empty($zip)) {
            return false;
        }
        else if (strlen($zip) != 6) {
           return false;
        } else if (!preg_match('/^[a-zA-Z0-9_]+$/', $zip)) {
            return false;
        } 
		else
		{
		return true;
		}
		
        


	}

	



}


?>