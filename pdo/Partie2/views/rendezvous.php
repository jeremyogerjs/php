<?php require ('../connexion.php'); ?>


<?php

if($conn)
{
    $id = $_GET['id'];
    $sql = "SELECT * FROM patients LEFT JOIN appointments ON patients.id = appointments.idPatients WHERE patients.id = $id";

    $result = $conn -> prepare($sql);

    $result -> execute();

    $results = $result -> fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
        print_r($results);
    echo "</pre>";
}
?>


<?php require ('./header.php'); ?>
