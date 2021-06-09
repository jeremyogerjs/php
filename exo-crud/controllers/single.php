<?php
include '../functions_custom.php';

require('../models/singleStudent.php');

if(isset($_GET['id']) && $_GET['id'] > 0){
    $data = singleData();
    require('../vue/single.php');
}
else
{
    exit("L'éléve que vous recherchez n'existe pas !");
}



