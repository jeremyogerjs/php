<?php
include '../functions_custom.php';
function updateData(){
	$firstName =  htmlspecialchars((!empty($_POST['firstName']) ? $_POST['firstName'] : ''));
	$lastName = htmlspecialchars((!empty($_POST['lastName']) ? $_POST['lastName'] : ''));
	$email = htmlspecialchars((!empty($_POST['email']) ? $_POST['email'] : ''));
	$phone = htmlspecialchars((!empty($_POST['phone']) ? $_POST['phone'] : ''));
	$age = htmlspecialchars((!empty($_POST['age']) ? $_POST['age'] : ''));
	$id = $_GET['id'];
	$conn = pdo_connect_mysql();

	if($conn) {
		try{
			$sql = "UPDATE students SET 
				first_name	= ?,
				last_name	= ?, 
				email		= ?, 
				age			= ?, 
				phone		= ? 
			WHERE id = ? ";
	
			$stmt = $conn ->prepare($sql);
			$stmt->execute([$firstName,$lastName,$email,$age,$phone,$id]);
		
			return true;
		}
		catch (PDOException $e)
		{
			return false;
		}
	
	};

};