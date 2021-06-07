<?php 
require('connection.php');
$firstName = (!empty($_POST['firstName']) ? $_POST['firstName'] : '' );
$lastName = (!empty($_POST['lastName']) ? $_POST['lastName'] : '' );
$age = (!empty($_POST['age']) ? $_POST['age'] : '' );

if($connected){
    try {
        $sql = "INSERT INTO students (first_name,last_name,age) VALUES (:prenom, :nom,:age)";
        $query = $conn ->prepare($sql);
        $query ->execute(array(':prenom' => $firstName, ':nom' => $lastName,':age' => $age));
        header("Location: http://localhost/php/pdo/index.php");
    }
    catch (PDOException $e) {
        echo $sql . '<br>' . $e ->getMessage();
    };
};

?>