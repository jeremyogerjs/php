<?php require('../connexion.php'); ?>
<?php require('header.php'); ?>
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
<?php require('footer.php'); ?>
<?php


if(!empty($_POST)){
    $lastName = htmlspecialchars($_POST['lastName']);
    $firstName = htmlspecialchars($_POST['firstName']);
    $birthDate = htmlspecialchars($_POST['birthDate']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $sql = "INSERT INTO patients (lastname,firstname,birthdate,phone,mail) 
            VALUES (?,?,?,?,?)";
    $result = $conn ->prepare($sql);
    $result ->execute([$lastName,$firstName,$birthDate,$phone,$email]);
    echo "record success !";
    return $result;
}

?>