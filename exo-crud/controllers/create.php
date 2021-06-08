<?php
include '../functions_custom.php';

require('../models/createStudent.php');

if($_POST){
	var_dump($_POST);
	createData();
	header("location:http://localhost/php/exo-crud/vue/list_contact.php");
}

?>