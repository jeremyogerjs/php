<?php
require('../connexion.php');

if($conn)
{
    $sql = "SELECT * FROM appointments";

    $result = $conn -> prepare($sql);

    $result -> execute();


    $results = $result -> fetchAll(PDO::FETCH_ASSOC);

    
}

?>
<?php require('./header.php'); ?>

<div class="col-5">
    <table class="table table-striped">

        <thead>
            <tr>
                
                <th scope="col"># Patient</th>
                <th scope="col"> dateHour</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results as $result): ?>
                <tr> 
                    <td><?= $result['idPatients']; ?> </td>
                    <td><?= $result['dateHour']; ?> </td>
                    <td class="actions p-3 ">
                        <a href="/php/pdo/Partie2/views/rendezvous.php?id=<?= $result['id'] ?>" class="edit"> <i class="fas fa-user "></i> </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>



</div>

<?php require('./footer.php'); ?>