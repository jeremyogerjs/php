<?php 
    require('connection.php');
    require('./model.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<div class="col-4 border p-2 mx-auto my-5">
    <form action="./formPost.php" method="post">
    
        <label class="form-label" for="firstName">First Name :</label>
        <input class="form-control" type="text" name="firstName" required>
        <label class="form-label" for="Last Name">Last name :</label>
        <input class="form-control" type="text" name="lastName" required>
        <label class="form-label" for="age">Age : </label>
        <input class="form-control" type="number" name="age" required>
        <input class="my-2 mx-auto btn btn-success" type="submit">
    
    </form>
    <div>
        
    </div>
    <div>
        <a href="./index.php">Retour a l'accueil</a>
    </div>


</div>
</body>
</html>