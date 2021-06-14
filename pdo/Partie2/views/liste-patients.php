<?php ob_start(); ?>

<div class="row">



    <div class="col-7">
        <h2>Liste des patients </h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Birth Date</th>
                    <th scope="col">Phone</th>
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
                            <a href="/php/pdo/Partie2/index.php?action=single&target=patient&id=<?= $result['id'] ?>" class="edit"> <i class="fas fa-user "></i> </a>
                            <a href="/php/pdo/Partie2/index.php?action=delete&target=patient&id=<?= $result['id'] ?>&action=delete" class="edit"> <i class="fas fa-trash "></i> </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="col-3">
        <form action="" class="form" method="POST">
            <label for="search" class="form-label">Rechercher patient : </label>
            <div class="input-group">
                <input type="search"class="form-control" name="search" id="search">
                <input type="submit" class="form-control" value="Rechercher">
            </div>
        </form>
        
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>


