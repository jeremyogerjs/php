<?php

require('./controllers/controller.php');


if(isset($_GET['action'])) {
    if($_GET['action'] === "list"){
        allStd();
    }
    else if ($_GET['action'] === 'single') {
        singleStd();
    }
    else if ($_GET['action'] === 'delete') {
        deleteStd();
    }
    else if ($_GET['action'] === 'create') {
        createStd();
    }
    else if ($_GET['action'] === 'update') {
        updateStd();
    }
}
else
{
    require('./vue/home.php');
}


