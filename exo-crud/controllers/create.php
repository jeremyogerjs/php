<?php
require('../models/createStudent.php');

if(!empty($_POST)){
	createData();
	header("location:http://localhost/php/exo-crud/controllers/read.php");
}
else
{
	require('../vue/create.php');
}

