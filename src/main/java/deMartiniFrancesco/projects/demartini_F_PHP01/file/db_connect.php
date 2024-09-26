<?php
$host = "localhost";
$db_name = "db99999";
$username = "ut99999";
$password = "pw99999";
 
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password,array(PDO::ATTR_PERSISTENT => true));
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    $con = new PDO("pgsql:host={$host};dbname={$db_name}", $username, $password);
}
  
// to handle connection error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>
