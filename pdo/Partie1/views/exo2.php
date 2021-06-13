<?php 

ob_start();
?>


<h2>Tous les types de spectacle</h2>


<div>
    <?php foreach($results as $result): ?>
        <p>ID : <?= $result['id']; ?></p>
        <p>Nom de spectacle :<?= $result['type']; ?></p>
    <?php endforeach; ?>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('./template.php'); ?>