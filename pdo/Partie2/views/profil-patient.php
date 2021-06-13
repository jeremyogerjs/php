<?php ob_start(); ?>

<div class="card col-3 mx-auto">

    <div class="card-header">
        Patient #<?= $_GET['id'] ?>
    </div>
    
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Last Name : <?= $results['lastname'] ?> </li>
            <li class="list-group-item">First Name :   <?= $results['firstname'] ?></li>
            <li class="list-group-item">Birth Date :  <?= $results['birthdate'] ?></li>
            <li class="list-group-item">Phone : <?= $results['phone'] ?></li>
            <li class="list-group-item">Email : <?= $results['mail'] ?></li>
        </ul>
    
    <a href="/php/pdo/Partie2/index.php?action=update&target=patient&id=<?= $_GET['id']; ?>"><button class="btn btn-success">  Modifier</button></a>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>