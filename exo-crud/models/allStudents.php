<?php
include '../functions_custom.php';
function getAllData(){
    $conn = pdo_connect_mysql();

    if($conn){
        try{
            $sql = "SELECT * FROM students";

            $result = $conn->prepare($sql);
    
            $result ->execute();
    
            $results = $result->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        }
        catch(PDOException $e)
        {
            echo 'Erreur: ' . $e->getMessage();
        }

    }


}