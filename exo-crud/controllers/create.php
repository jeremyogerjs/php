<?php
include '../functions_custom.php';
require('../models/createStudent.php');

if(!empty($_POST)){
	
	if(createData()){
		header("location:http://localhost/php/exo-crud/controllers/read.php?statut=success&method=post");
	}
	else
	{
		header("location:http://localhost/php/exo-crud/vue/create.php?statut=fail");
	}
}
else
{
	require('../vue/form.php');
}

