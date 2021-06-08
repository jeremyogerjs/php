<?php 
include '../functions_custom.php';

?>

<?php 

require('../models/deleteStudent.php');

if(isset($_GET)){
	deleteData();
	header("location:http://localhost/php/exo-crud/vue/list_contact.php");
};
?>