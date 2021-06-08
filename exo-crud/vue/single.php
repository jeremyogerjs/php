<?php require('../controllers/single.php') ?>

<?php $results = singleData() ?>
<?php include './header.php' ?>
<h2>One student</h2>

<div>

    <div class="content">
    <?php foreach($results as $value): ?>
        <p>code barre: <?= $value['id'] ?></p>
        <p>First Name : <?= $value['first_name'] ?></p>
        <p>Last Name : <?= $value['last_name'] ?></p>
        <p>Email : <?= $value['email'] ?> </p>
        <p> Phone Number : <?= $value['phone'] ?></p>
        <p> Age : <?= $value['age'] ?> </p>

    <?php endforeach; ?>
    </div>

    <a href="./list_contact.php">Retour aux contacts</a>


</div>

<?php include './footer.php' ?>