<?php 
    require('../connection.php');
    require('../models/ShowTypes.php');
    require('header.php');
?>


<h2>Tous les types de spectacle</h2>


<div>
    <?php foreach($results as $result): ?>
        <p>ID : <?= $result['id']; ?></p>
        <p>Nom de spectacle :<?= $result['type']; ?></p>
    <?php endforeach; ?>
</div>

<?php require('footer.php'); ?>