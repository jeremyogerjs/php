<?php
require('../connexion.php');


function getData ()
{
    require('../connexion.php');
    if($conn){
        $sql = "SELECT id,lastname FROM patients";
    
        $result = $conn ->prepare($sql);
    
        $result -> execute();
    
        $patients = $result ->fetchAll(PDO::FETCH_ASSOC);
        
       
        return $patients;
    }
}


?>
<?php require('header.php'); ?>
<form action="" method="POST">

    <div class="col-4 mx-auto border border-round p-3">
        <label for="dateTime" class="form-label">Date Hour : </label>
        <input type="time" name="dateTime" id="dateTime" class="form-control">
        
        <label for="date" class="form-label">Date : </label>
        <input type="date" name="date" id="date" class="form-control">


        <select name="idPatient" id="idPatient" class="form-control my-2">
        <option selected>Choisir patient</option>
            <?php foreach (getData() as $patient) : ?>
                <option value="<?= $patient['id'] ?> "><?= $patient['lastname'] ?></option>
            <?php endforeach; ?>
        </select>
        <input class="btn btn-success mx-auto my-3" type="submit" value="Ajouter">
    </div>
</form>
<?php require('footer.php'); ?>
<?php


if(!empty($_POST)){

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

?>