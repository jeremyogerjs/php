<?php 
ob_start();
?>

<?php  require('header.php'); ?>


<div class="col-5">
<?php foreach($results as $result) : ?>
    <p> Nom du spectacle : <?= $result['title']; ?> par <?= $result['performer']; ?>, le <?= $result['date']; ?> à <?= $result['startTime']; ?> </p>
<?php endforeach; ?>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('./template.php'); ?>