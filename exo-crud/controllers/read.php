<?php
include '../functions_custom.php';
require('../models/allStudents.php');


if(!empty(getAllData())){
    $data = getAllData();
     
    require('../vue/list_contact.php');
}
else
{
    return "Une erreur est survenue veuillez rafrachir la page !";
}

