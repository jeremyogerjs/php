<?php
require('connection.php');

require('models/AllClient.php');

?>

<?php require('views/header.php'); ?>



<h1>Tout les clients !</h1>

<div class="col-5">

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Last Name</th>
            <th scope="col">First Name</th>
            <th scope="col">Birth Date</th>
            <th scope="col">Card</th>
            <th scope="col">Card Number</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($results as $result): ?>
        <tr>
        <td> <?= $result['id'] ?></td>
        <td> <?= $result['lastName'] ?> </td>
        <td> <?= $result['firstName'] ?> </td>
        <td> <?= $result['birthDate'] ?> </td>
        <td> <?= $result['card'] ?> </td>
        <td> <?= $result['cardNumber'] ?> </td>
        </tr>
    <?php endforeach; ?>
    </tbody>

</table>
</div>


<?php require('views/footer.php'); ?>