<?php
require('../connexion.php');

if($conn){
    $sql = "SELECT id,lastname FROM patients";

    $result = $conn ->prepare($sql);

    $result -> execute();

    $patients = $result ->fetchAll(PDO::FETCH_ASSOC);

}
?>
<?php require('header.php'); ?>
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
<?php require('footer.php'); ?>
<?php

if($conn)
{
    if(!empty($_POST && $_GET['action'] === "create")){

        $date = strtotime(htmlspecialchars($_POST['date']) . htmlspecialchars($_POST['dateTime']));
        $idPatient = htmlspecialchars($_POST['idPatient']);
        $dateformat = date('Y-m-d H:i:s', $date);
    
        $sql = "INSERT INTO appointments (dateHour,idPatients) 
        VALUES ( ?, ?)";
        $result = $conn ->prepare($sql);
    
        $result ->execute([$dateformat, $idPatient]);
        echo "record success !";
        return $result;
    }
    else if (!empty($_POST) && $_GET['action'] === "update")
    {
        $date = strtotime(htmlspecialchars($_POST['date']) . htmlspecialchars($_POST['dateTime']));
        $id = htmlspecialchars($_GET['id']);
        $dateformat = date('Y-m-d H:i:s', $date);
    
        $sql = "UPDATE appointments SET dateHour = ? 
        WHERE id = $id ";
        $result = $conn ->prepare($sql);
    
        $result ->execute([$dateformat]);
        echo "record success !";
        return $result;
    }
    else if (isset($_GET['id']) && $_GET['action'] === "delete")
    {
        $id = $_GET['id'];
        $sql = "DELETE FROM appointments WHERE id = $id";
    
        $conn -> exec($sql);
        echo "deleted success !";

    }


}


?>