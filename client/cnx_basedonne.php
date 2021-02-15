<?php 
$servername = "localhost";
$username = "root";
//hedhy 7otouha    $password = ""; 
$password = ""; 
try {
  $conn = new PDO("mysql:host=$servername;dbname=restaurant", $username, $password);
  // set the PDO error mode to exception
  //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
 
?>