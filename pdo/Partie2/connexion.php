<?php

$serverName = "localhost";
$userName = "root";
$db_name = "hospitale2n";
$password = "";


try{

    $conn = new PDO("mysql:host=$serverName;dbname=$db_name",$userName,$password);
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected success !";
}
catch(PDOException $e)
{
    echo "Erreur : " . $e->getMessage();
}

