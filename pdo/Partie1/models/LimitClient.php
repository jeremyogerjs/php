<?php


if($conn){

    $sql = "SELECT * FROM clients LIMIT 20";

    $result = $conn ->prepare($sql);

    $result ->execute();

    $results = $result ->fetchAll(PDO::FETCH_ASSOC);

    return $results;
}