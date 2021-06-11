<?php

if($conn){

    $sql = "SELECT * FROM clients LEFT JOIN cards ON clients.cardNumber = cards.cardNumber";

    $result = $conn->prepare($sql);

    $result-> execute();

    $results = $result->fetchAll(PDO::FETCH_ASSOC);
    return $results;

};


