<?php
include './functions_custom.php';

$conn = pdo_connect_mysql();
if($conn){
    $conn = pdo_connect_mysql();
    $id = $_GET['id'];
    $sql = "SELECT * FROM students WHERE id= $id";

    $result = $conn ->prepare($sql);
    $result ->execute();

    $results = $result ->fetchAll(PDO::FETCH_ASSOC);
    print_r($results);
}
else{
    echo "Une erreur est survenur veuillez rafraichir la page ! ";
}

?>

<?php echo template_header('single'); ?>

<h2>One student</h2>

<div>

    <div class="content">
    <?php foreach($results as $value): ?>
        <p>code barre: <?= $value['id'] ?></p>
        <p>First Name : <?= $value['first_name'] ?></p>
        <p>Last Name : <?= $value['last_name'] ?></p>
        <p>Email : <?= $value['email'] ?> </p>
        <p> Phone Number : <?= $value['phone'] ?></p>
        <p> Age : <?= $value['age'] ?> </p>

    <?php endforeach; ?>
    </div>

    <a href="read.php">Retour aux contacts</a>


</div>


<?php echo template_footer(); ?>