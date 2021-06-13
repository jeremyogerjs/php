<?php ob_start(); ?>

<div class="mx-auto">
    <h1>Bienvenue sur le site du CHN !!</h1>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>