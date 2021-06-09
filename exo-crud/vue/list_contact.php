<?php include 'header.php' ?>


<div class="content read">
	<h2>Voir les STUDENTS</h2>
	<a href="../controllers/create.php" class="create-contact">Créer un étudiant</a>
        <h3>
            <?php if(isset($_GET['method']) && $_GET['method'] === 'post'){
                if($_GET['statut'] === 'success' ){

                    echo "New record success !!";
                }
            } 
            else if (isset($_GET['method']) && $_GET['method'] === 'update'){
                if($_GET['statut'] === 'success' ){
                    echo "edit success !!";
                }
            }
                        
            ?>         
        </h3>    
	<table>
        <thead>
            <tr>
                <td>#</td>
                <td>Nom</td>
                <td>Prénom</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Age</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $value): ?>
            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['first_name'] ?></td>
                <td><?= $value['last_name'] ?></td>
                <td><?= $value['email'] ?></td>
                <td><?= $value['phone'] ?></td>
                <td><?= $value['age'] ?></td>
                <td class="actions">
                    <a href="../controllers/single.php?id=<?= $value['id'] ?>" class="edit"> <i class="fas fa-user fa-xs"></i> </a>
                    <a href="../controllers/update.php?id=<?= $value['id'] ?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                    <a href="../controllers/delete.php?id=<?= $value['id'] ?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                </td>
            </tr>
            
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'footer.php' ?>