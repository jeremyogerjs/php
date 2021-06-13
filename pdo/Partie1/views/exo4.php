
<?php ob_start(); ?>


<div class="col-5">
<h2>Liste des clients fidéles</h2>
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


<?php $content = ob_get_clean(); ?>

<?php require('./template.php'); ?>