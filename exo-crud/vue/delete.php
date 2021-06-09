<?php ob_start(); ?>
<div class="content delete">
	<h2>Delete Student Guillaume</h2>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>