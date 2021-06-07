<?php
require('connection.php');

require('model.php');

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
 

<?php if ($connected) : ?>
    <div>
        <a href="./formulaire.php">Create new user</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">first name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Age</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach( getAllData($connected,$conn) as $value) : ?>
            <tr>
                <th scope="row"> <?= $value['id'] ?></th>
                <td> <?= $value['first_name'] ?></td>
                <td> <?= $value['last_name'] ?></td>
                <td> <?= $value['age'] ?></td>
                <td><button id="<?= $value['id'] ?>" onclick="delUser(this.id)" class="btn btn-danger">Supprimer</button></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
<script>
function delUser(id){
    
}
</script>
</body>

</html>