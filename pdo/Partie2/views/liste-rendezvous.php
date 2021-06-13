<?php ob_start();?>


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
                        <a href="/php/pdo/Partie2/views/rendezvous.php?id=<?= $result['idPatients']; ?>" class="edit"> <i class="fas fa-user "></i> </a>
                        <a href="/php/pdo/Partie2/views/ajout-rendezvous.php?id=<?= $result['idPatients']; ?>&action=update" class="edit"> <i class="fas fa-pen "></i> </a>
                        <a href="/php/pdo/Partie2/views/ajout-rendezvous.php?id=<?= $result['idPatients']; ?>&action=delete" class="edit"> <i class="fas fa-trash "></i> </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>



</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>