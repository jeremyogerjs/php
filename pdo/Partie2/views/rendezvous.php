<?php ob_start(); ?>

<div class="card mx-auto my-2" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <?php foreach($results as $result) : ?>
        <li class="list-group-item">Rendez-vous numéro : <?= $result['id']; ?> </li>
        <li class="list-group-item">Nom du patient : <?= $result['lastname']; ?> </li>
        <li class="list-group-item">Prénom du patient : <?= $result['firstname']; ?></li>
        <li class="list-group-item">Phone du patient : <?= $result['phone']; ?> </li>
        <li class="list-group-item">dateHour : <?= $result['dateHour']; ?> </li>
    <?php endforeach; ?>
  </ul>
  
</div>

<?php $content = ob_get_clean(); ?>
<?php require ('template.php'); ?>