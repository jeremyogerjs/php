<?php

function createData(){
	$conn = pdo_connect_mysql();
	$firstName =  (!empty($_POST['firstName']) ? $_POST['firstName'] : '');
	$lastName = (!empty($_POST['lastName']) ? $_POST['lastName'] : '');
	$email = (!empty($_POST['email']) ? $_POST['email'] : '');
	$phone = (!empty($_POST['phone']) ? $_POST['phone'] : '');
	$age = (!empty($_POST['age']) ? $_POST['age'] : '');
	if($conn){
		try{
			$data = [
				'firstName' 	=> $firstName,
				'lastName'		=> $lastName,
				'email'			=> $email,
				'phone'			=> $phone,
				'age'			=> $age
			];
			$sql = "INSERT INTO students (first_name,last_name,email,phone,age) VALUES (:firstName, :lastName, :email, :phone, :age)";
			$result = $conn->prepare($sql);
			$result->execute($data);
			echo "New record success !";
		}
		catch (PDOException $e){
			echo "Un probléme est survenu, veuillez rafrachir la page et recommencer !";
		}
	}
};