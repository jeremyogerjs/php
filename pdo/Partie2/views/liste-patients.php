<?php require('../connexion.php'); ?>
<?php
if($conn)
{
    $sql = "SELECT * FROM patients";

    $result = $conn ->prepare($sql);

    $result ->execute();

    $results = $result ->fetchAll(PDO::FETCH_ASSOC);
}
else
{
    
    echo "Une erreur est survenue veuillez reessayer ultérieurement !";
}

?>
<?php require('header.php'); ?>
<div class="col-5">
<h2>Liste des patients </h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Last Name</th>
            <th scope="col">First Name</th>
            <th scope="col">Birth Date</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Mail</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($results as $result): ?>
            <tr>
            <td> <?= $result['id'] ?></td>
            <td> <?= $result['lastname'] ?> </td>
            <td> <?= $result['firstname'] ?> </td>
            <td> <?= $result['birthdate'] ?> </td>
            <td> <?= $result['phone'] ?> </td>
            <td> <?= $result['mail'] ?> </td>
            <td class="actions p-3 ">
                    <a href="/php/pdo/Partie2/views/profil-patient.php?id=<?= $result['id'] ?>" class="edit"> <i class="fas fa-user "></i> </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>
</div>
<?php require('footer.php'); ?>


