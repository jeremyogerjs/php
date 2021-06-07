<?php 
$serverName = "localhost";
$userName = "root";
$password = "";
$connected = false;
try {
    $conn = new PDO("mysql:host=$serverName;dbname=mon_test",$userName,$password);
    //set the PDO error mode to exeption
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connected = true;

   
} catch (PDOException $e) {
    echo "Connection failed:" . $e -> getMessage();
};


?>