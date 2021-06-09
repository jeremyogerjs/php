<?php

function createData(){
	$conn = pdo_connect_mysql();
	$firstName =  htmlspecialchars((!empty($_POST['firstName']) ? $_POST['firstName'] : ''));
	$lastName = htmlspecialchars((!empty($_POST['lastName']) ? $_POST['lastName'] : ''));
	$email = htmlspecialchars((!empty($_POST['email']) ? $_POST['email'] : ''));
	$phone = htmlspecialchars((!empty($_POST['phone']) ? $_POST['phone'] : ''));
	$age = htmlspecialchars((!empty($_POST['age']) ? $_POST['age'] : ''));
	if($conn){
		try{
			$sql = "INSERT INTO students (first_name,last_name,email,phone,age) 
					VALUES (?, ?, ?, ?, ?)";
			$result = $conn->prepare($sql);
			$student = $result->execute([ $firstName, $lastName, $email, $phone, $age]);
			$msg = "New record success !";
			return $student;
		}
		catch (PDOException $e){
			echo "Un probléme est survenu, veuillez rafrachir la page et recommencer !";
		}
	}
};