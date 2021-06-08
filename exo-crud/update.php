<?php 
include 'functions_custom.php';
$conn = pdo_connect_mysql();

?>
<?php echo template_header('update'); ?>
<div class="content update">
	<h2>Update Student Guillaume</h2>
</div>
<div class="content">
    <form action="" method="post">
    
        <label class="form-label" for="firstName">First Name :</label>
        <input class="form-control" type="text" name="firstName" required>

        <label class="form-label" for="Last Name">Last name :</label>
        <input class="form-control" type="text" name="lastName" required>

		<label class="form-label" for="email">Email : </label>
        <input class="form-control" type="mail" name="email" required>

		<label class="form-label" for="phone">phone : </label>
        <input class="form-control" type="number" name="phone" required>

        <label class="form-label" for="age">Age : </label>
        <input class="form-control" type="number" name="age" required>

        <input class="my-2 mx-auto btn btn-success" type="submit">
    
    </form>
    <div>
        
    </div>

    <div>
        <a href="./read.php">Retour aux contacts</a>
    </div>

</div>
<?php echo template_footer(); ?>
<?php 
function updateData(){
	$firstName =  (!empty($_POST['firstName']) ? $_POST['firstName'] : '');
	$lastName = (!empty($_POST['lastName']) ? $_POST['lastName'] : '');
	$email = (!empty($_POST['email']) ? $_POST['email'] : '');
	$phone = (!empty($_POST['phone']) ? $_POST['phone'] : '');
	$age = (!empty($_POST['age']) ? $_POST['age'] : '');
	$id = $_GET['id'];
	$conn = pdo_connect_mysql();

	if($conn) {
		try{
			$sql = "UPDATE students SET 
				first_name='$firstName',
				last_name='$lastName', 
				email='$email', 
				age='$age', 
				phone='$phone' 
			WHERE id='$id'";
	
			$stmt = $conn ->prepare($sql);
			$stmt->execute();
		
			return "l'étudiant ".$firstName . "a été modifié avec succés !";
		}
		catch (PDOException $e)
		{
			echo "Un probléme est survenu, veuillez rafrachir la page et recommencer !";
		}
	
	};

};

if($_POST){
	var_dump($_POST);
	updateData();
	header("location:http://localhost/php/exo-crud/read.php");
};

?>