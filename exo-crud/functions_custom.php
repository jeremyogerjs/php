<?php
function pdo_connect_mysql() {
  require('db-config.php');
 
  try {
    $conn = new PDO("mysql:host=$serverName;dbname=mon_test",$userName,$password);
   
    //set the PDO error mode to exeption
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected !";
    return $conn;
  } catch (PDOException $e) {
    echo "Connection failed:" . $e -> getMessage();
  }
  return $conn;
};

?>