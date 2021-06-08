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
				first_name	='$firstName',
				last_name	='$lastName', 
				email		='$email', 
				age			='$age', 
				phone		='$phone' 
			WHERE id='$id'";
	
			$stmt = $conn ->prepare($sql);
			$stmt->execute();
		
			return "l'étudiant ".$firstName . "a été modifié avec succés !";
		}
		catch (PDOException $e)
		{
			echo "Un probléme est survenu, veuillez rafraichir la page et recommencer !";
		}
	
	};

};