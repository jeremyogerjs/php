<?php
include 'functions_custom.php';
$conn = pdo_connect_mysql();
if ($conn)
{
    $sql = "SELECT * FROM students";
    $result = $conn ->prepare($sql);
    $result ->execute();
    $results = $result ->fetchAll(PDO::FETCH_ASSOC);
} else 
{
    echo "une erreur est survenue rafraichir la page !";
};



?>
<?php echo template_header('Read'); ?>

<div class="content read">
	<h2>Voir les STUDENTS</h2>
	<a href="create.php" class="create-contact">Créer un étudiant</a>
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
        <?php foreach ($results as $value): ?>
            
                <tr>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['first_name'] ?></td>
                    <td><?= $value['last_name'] ?></td>
                    <td><?= $value['email'] ?></td>
                    <td><?= $value['phone'] ?></td>
                    <td><?= $value['age'] ?></td>
                    <td class="actions">
                        <a href="single.php?id=<?= $value['id'] ?>" class="edit"> <i class="fas fa-user fa-xs"></i> </a>
                        <a href="update.php?id=<?= $value['id'] ?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                        <a href="delete.php?id=<?= $value['id'] ?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                    </td>
                </tr>
            
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php echo template_footer(); ?>