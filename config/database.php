<?php
// used to connect to the database
$host = "localhost";
$db_name = "php_crud_1";
$username = "dimes_for_crimes";
$password = "H1ddenT@l3nt";
  
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
  
// show error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>