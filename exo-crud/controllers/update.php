<?php
include '../functions_custom.php';
require('../models/updateStudent.php');
require('../models/singleStudent.php');

if(isset($_GET['id']) && $_GET['id'] > 0 ){
    $singleData = singleData();
    require('../vue/update.php');
    if(!empty($_POST)){
        updateData();
        header("location:http://localhost/php/exo-crud/controllers/read.php");
    }
    exit;
}
else
{
    
    exit("L'ID n'est pas défini !");
}