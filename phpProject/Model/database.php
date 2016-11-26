<?php

class DataBaseConnection{

	//want only one instance
	private static $con_inst = false;
	private static $con;

   private static $dsn = 'mysql:host=localhost;dbname=reviewsitedatabase';
   private static $username = 'root';
   private static$password = '';
   
   //rule for creating singleton
   //make constructor private
   private function __construct()
   {
   }
   
   //declaring static method to create database connection
   public static function createDataBaseConnection()
   {
   
   //connection will not be re-created if connection already exist
   if(!self::$con_inst)
   {
   try {
        self::$con = new PDO(self::$dsn, self::$username, self::$password);
		self::$con_inst = true;
		
		return self::$con;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
		self::$con_inst = false;
		return false;
        include('database_error.php');
        exit();
    }
	}
	else
	{
	
	return  self::$con;
	}

   }
   


}
?>