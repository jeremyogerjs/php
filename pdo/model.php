<?php

function getAllData ($connected,$conn){
    if ($connected) {
        
        $sql = "SELECT * FROM students";
        $result = $conn ->prepare($sql);
        $result ->execute();
    
        $results = $result ->fetchAll(PDO::FETCH_ASSOC);
        
        return $results;
    
    }
    else {
        echo "youstone on a un probleme !";
    };
};



?>