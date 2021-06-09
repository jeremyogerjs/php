<?php ob_start(); ?>

<div class="content">
	<h2>Accueil</h2>
	<p>ma home page !</p>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>