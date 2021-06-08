<?php 
include './functions_custom.php';
$conn = pdo_connect_mysql();
?>
<?php echo template_header('delete'); ?>
<div class="content delete">
	<h2>Delete Student Guillaume</h2>
</div>
<?php echo template_footer(); ?>
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

if(isset($_GET)){
	deleteData();
	header("location:http://localhost/php/exo-crud/read.php");
};
?>