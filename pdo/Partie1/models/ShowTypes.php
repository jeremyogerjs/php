<?php

if($conn){

    $sql = "SELECT * FROM showtypes";

    $result = $conn->prepare($sql);

    $result->execute();

    $results = $result->fetchAll(PDO::FETCH_ASSOC);

    return $results;
}