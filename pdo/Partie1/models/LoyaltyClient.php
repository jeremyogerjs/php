<?php

if($conn){
    $sql = "SELECT * FROM clients INNER JOIN cards ON clients.cardNumber= cards.cardNumber WHERE cardTypesId = 1";

    $result = $conn ->prepare($sql);

    $result ->execute();

    $results = $result ->fetchAll(PDO::FETCH_ASSOC);

    return $results;
}