<?php ob_start(); ?>

<form action="" method="POST">

    <div class="col-4 mx-auto border border-round p-3">
        <label for="lastName" class="form-label">Last name : <span style="opacity: .5;text-transform:uppercase"><?= $results['lastname']; ?></span> </label>
        <input type="text" name="lastName" id="lastName" class="form-control">

        <label for="firstName" class="form-label">First name : <span style="opacity: .5;text-transform:uppercase"><?= $results['firstname']; ?></span></label>
        <input type="text" name="firstName" id="firstName" class="form-control">

        <label for="birthDate" class="form-label"> Birth date :<span style="opacity: .5;text-transform:uppercase"><?= $results['birthdate']; ?></span> </label>
        <input type="date" name="birthDate" id="birthDate" class="form-control">

        <label for="phone" class="form-label"> Phone number :<span style="opacity: .5;text-transform:uppercase"><?= $results['phone']; ?></span> </label>
        <input type="tel" name="phone" id="birthDate" class="form-control">

        <label for="email" class="form-label">Email :<span style="opacity: .5;text-transform:uppercase"><?= $results['mail']; ?></span> </label>
        <input type="email" name="email" id="email" class="form-control">
    
        <input class="btn btn-success mx-auto my-3" type="submit" value="Modifier">
    </div>
</form>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>