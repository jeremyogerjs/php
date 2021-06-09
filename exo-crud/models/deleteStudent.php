<?php


function deleteData(){

	$id = $_GET['id'];
	$conn = pdo_connect_mysql();

	if($conn){
		try{
			$sql = "DELETE FROM students WHERE id= $id";
	
			$conn->exec($sql);
			echo "delete success !";
			
		}
		catch(PDOException $e){
			echo "Error: " . $e->getMessage();
			
		}
	}
	else {
		return false;
	}
};