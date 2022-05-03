<?php 
$dns ="mysql:host=localhost;dbname=id13110992_smart_election";
$username = "root";
$password = "";

try {
    $conn = new PDO($dns, $username, $password);
    
    
   //echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
 ?>