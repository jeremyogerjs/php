

<?php ob_start(); ?>
<form action="" method="POST">

    <div class="col-4 mx-auto border border-round p-3">
        <label for="lastName" class="form-label">Last name : </label>
        <input type="text" name="lastName" id="lastName" class="form-control">

        <label for="firstName" class="form-label">First name :</label>
        <input type="text" name="firstName" id="firstName" class="form-control">

        <label for="birthDate" class="form-label"> Birth date : </label>
        <input type="date" name="birthDate" id="birthDate" class="form-control">

        <label for="phone" class="form-label"> Phone number : </label>
        <input type="tel" name="phone" id="birthDate" class="form-control">

        <label for="email" class="form-label">Email : </label>
        <input type="email" name="email" id="email" class="form-control">
    
        <input class="btn btn-success mx-auto my-3" type="submit" value="Ajouter">
    </div>
</form>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>