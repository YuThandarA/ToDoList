
<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "test";

try {
    $con = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
}
  
// show error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?> 