<?php
require('./controller/controllers.php');

if(isset($_GET['action']))
{
    if($_GET['action'] === "create" && $_GET['target'] === "patient")
    {
        echo "test !!";
        createPatient();
    }
    else if ($_GET['action'] === "list" && $_GET['target'] === "patient")
    {
        getAllPatient();
    }
    else if ($_GET['action'] === "single" && $_GET['target'] === "patient" && $_GET['id'] >=0)
    {
        
        singlePatient();
    }
    else if ($_GET['action'] === "update" && $_GET['target'] === "patient" && $_GET['id'] >=0)
    {
        updatePatient();
    }
    else if ($_GET['action'] === "delete" && $_GET['target'] === "patient" && $_GET['id'] >=0)
    {
        deletePatient();
    }
}
else
{
    require('./views/home.php');
}
