<?php 
require('../connection.php'); 
require('../models/OrderClient.php');
?>

<?php require('header.php'); ?>

<div class="col-5">
<h2>Client trié par ordre alphabétiques et afficher que le nom et prenom</h2>
    <?php foreach($results as $result): ?>

    <div>
        <p>Nom : <?= $result['lastName']; ?><br>
        Prenom : <?= $result['firstName']; ?>
        </p>

    </div>
    <?php endforeach; ?>
</div>


<?php require('footer.php'); ?>
