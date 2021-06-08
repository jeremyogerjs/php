<?php 


require('../models/deleteStudent.php');

if(isset($_GET['id']) && $_GET['id'] > 0 ){
	deleteData();
	header("location:http://localhost/php/exo-crud/vue/list_contact.php");
	exit();
}
else{
	echo "Erreur : Impossible de supprimer cette eleve ! ";
}
