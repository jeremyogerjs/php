<?php

require('../models/createStudent.php');

if(isset($_POST)){
	createData();
	header("location:http://localhost/php/exo-crud/vue/list_contact.php");
}

