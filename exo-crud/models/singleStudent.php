<?php

function singleData(){
    $conn = pdo_connect_mysql();
    if($conn){
        try{
            $id = $_GET['id'];
            $sql = "SELECT * FROM students WHERE id= $id";
        
            $result = $conn ->prepare($sql);
            $result ->execute();
        
            $results = $result ->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        }
        catch(PDOException $e)
        {
            echo 'Erreur : '. $e->getMessage();
        }
        
    };

};

