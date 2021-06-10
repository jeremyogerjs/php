<?php

if($conn){

    $sql = "SELECT * FROM clients";

    $result = $conn->prepare($sql);

    $result-> execute();

    $results = $result->fetchAll(PDO::FETCH_ASSOC);

    return $results;

};