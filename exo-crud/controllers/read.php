<?php


require('../models/allStudents.php');


if(!empty(getAllData())){
    $data = getAllData();
    return $data;
}
else
{
    return "Une erreur est survenue veuillez rafrachir la page !";
}

