<?php require('../connexion.php'); ?>

<?php
if($conn)
{
    if(!isset($_GET['action'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM patients WHERE id=$id";
    
        $result = $conn ->prepare($sql);
        $result ->execute();
    
        $results = $result ->fetchAll(PDO::FETCH_ASSOC);

    }
    else
    {
        $id = $_GET['id'];
        $sql = "DELETE FROM appointments LEFT JOIN patients ON patients.id = appointments.idPatients ";

        

        $conn -> exec($sql);
        echo "deleted success";

    }

}

?>
<?php require('header.php'); ?>

<div class="card col-3 mx-auto">

    <div class="card-header">
        Patient #<?= $_GET['id'] ?>
    </div>
    <?php foreach($results as $result) : ?>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Last Name : <?= $result['lastname'] ?> </li>
            <li class="list-group-item">First Name :   <?= $result['firstname'] ?></li>
            <li class="list-group-item">Birth Date :  <?= $result['birthdate'] ?></li>
            <li class="list-group-item">Phone : <?= $result['phone'] ?></li>
            <li class="list-group-item">Email : <?= $result['mail'] ?></li>
        </ul>
    <?php endforeach; ?>
    <a href="/php/pdo/Partie2/views/updatePatient.php?id=<?= $_GET['id']; ?>"><button class="btn btn-success">  Modifier</button></a>
</div>

<?php require('footer.php'); ?>