<?php ob_start(); ?>

<form action="" method="POST">

    <div class="col-4 mx-auto border border-round p-3">
        <label for="dateTime" class="form-label">Date Hour : </label>
        <input type="time" name="dateTime" id="dateTime" class="form-control">
        
        <label for="date" class="form-label">Date : </label>
        <input type="date" name="date" id="date" class="form-control">

        <?php if($_GET['action'] === "create") : ?>
            <select name="idPatient" id="idPatient" class="form-control my-2">
                <option selected>Choisir patient</option>
                <?php foreach ($patients as $patient) : ?>
                    <option value="<?= $patient['id'] ?> "><?= $patient['lastname'] ?></option>
                <?php endforeach; ?>
            </select>
            <input class="btn btn-success mx-auto my-3" type="submit" value="Ajouter">
        <?php else : ?>
            <p>Modification du patient : <?= $patients[0]['lastname'] ;?></p>
            <input class="btn btn-success mx-auto my-3" type="submit" value="Modifier">
        <?php endif; ?>
    </div>
</form>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>