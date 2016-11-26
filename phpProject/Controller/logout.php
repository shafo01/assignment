<?php
session_start();
unset($_SESSION["email"]);
unset($_SESSION["password"]);
setcookie("email", "" , time()- 3600,"/","localhost",false,true);
setcookie("password", "" , time()- 3600,"/","localhost",false,true);
header("Location:../View/index.php");
?>