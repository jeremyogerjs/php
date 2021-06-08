<?php


    require('../models/updateStudent.php');

if(isset($_GET['id']) && $_GET['id'] > 0 ){
    updateData();
    header("location:http://localhost/php/exo-crud/vue/list_contact.php");
    exit;
}
else
{
    exit("L'ID n'est pas défini !");
}