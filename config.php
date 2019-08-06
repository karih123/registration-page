    
<?php 
$db_user = "Hirak1stRegistrationStite";
$db_pass = "HirakRegistration123@#";
$db_name = "useraccounts";
$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);