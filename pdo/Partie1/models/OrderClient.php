<?php


if($conn){

    $sql = "SELECT * FROM clients WHERE lastName LIKE 'm%' ORDER BY lastName";

    $result = $conn ->prepare($sql);

    $result ->execute();

    $results = $result ->fetchAll(PDO::FETCH_ASSOC);

    return $results;
}