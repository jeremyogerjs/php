<?php require('../connexion.php'); ?>

<?php
    if($conn){
        $id = $_GET['id'];
        $sql = "SELECT * FROM patients WHERE id=$id";

        $result = $conn ->prepare($sql);

        $result ->execute();

        $results = $result ->fetch(PDO::FETCH_ASSOC);
    }

?>
<?php require('header.php'); ?>

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
<?php require('footer.php'); ?>
<?php


if(!empty($_POST)){
    $lastName = htmlspecialchars($_POST['lastName']);
    $firstName = htmlspecialchars($_POST['firstName']);
    $birthDate = htmlspecialchars($_POST['birthDate']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $id = $_GET['id'];
    $sql = "UPDATE patients SET 
            lastname    = ?,
            firstname   = ?,
            birthdate   = ?,
            phone       = ?,
            mail        = ? 
            WHERE id    = ? ";
    $result = $conn ->prepare($sql);
    $result ->execute([$lastName,$firstName,$birthDate,$phone,$email,$id]);
    echo "Update success !";
    return $result;
}

?>