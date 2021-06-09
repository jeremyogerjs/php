<?php
require('../models/updateStudent.php');

if(isset($_GET['id']) && $_GET['id'] > 0 ){
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