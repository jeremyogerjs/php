<?php



class Manager
{
 
  protected function dbConnect ()
  {
    require('db-config.php');
    try {
        $conn =  new PDO("mysql:host=$server_name;dbname=mon_test",$user_name,$password);
      
       //set the PDO error mode to exeption
       $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       return $conn;
   
     } catch (PDOException $e) {
       return false;
     }
  }
}