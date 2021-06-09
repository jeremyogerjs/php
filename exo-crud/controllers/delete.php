<?php 
include '../functions_custom.php';
require('../models/deleteStudent.php');

if(isset($_GET['id']) && $_GET['id'] > 0 ){
	deleteData();
	header("location:http://localhost/php/exo-crud/controllers/read.php");
	exit();
}
else{
	echo "Erreur : Impossible de supprimer cette élève ! ";
}
