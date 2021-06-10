<?php 
require('../connection.php'); 
require('../models/ClientFilter.php');

?>
<?php require('header.php') ?>
<div class="col-5">
<h2>Les 20 premiers clients </h2>
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
        <td> <?= $result['card'] === "1" ? "oui": 'non' ?> </td>
        <td> <?= $result['card'] === "1" ? $result['cardNumber'] : '' ?> </td>
        </tr>
    <?php endforeach; ?>
    </tbody>

</table>
</div>

<?php require('footer.php'); ?>