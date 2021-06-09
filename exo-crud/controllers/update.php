<?php

require('../models/updateStudent.php');


if(isset($_GET['id']) && $_GET['id'] > 0 ){
    require('../vue/form.php');
    if(!empty($_POST)){
        if(updateData()){
            header("location:http://localhost/php/exo-crud/controllers/read.php?statut=success&method=update");
        }
        else
        {
            header("location:http://localhost/php/exo-crud/vue/form.php?statut=fail");
        }
    }
    exit;
}
else
{
    exit("L'ID n'est pas défini !");
}