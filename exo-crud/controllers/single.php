<?php


require('../models/singleStudent.php');

if(isset($_GET['id']) && $_GET['id'] > 0){
    $data = singleData();
    
    return $data;

}
else
{
    echo "L'éléve que vous recherchez n'existe pas !";
}



