<?php 
ob_start();
?>



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


<?php $content = ob_get_clean(); ?>
<?php require('./template.php'); ?>
