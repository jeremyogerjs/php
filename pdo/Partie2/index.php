<?php
require('./controller/PatientsController.php');
require('./controller/AppointmentsController.php');

if(isset($_GET['action']))
{
    $PatientController = new PatientController();
    if($_GET['action'] === "create" && $_GET['target'] === "patient")
    {
        echo "test !!";
        $PatientController -> createPatient();
    }
    else if ($_GET['action'] === "list" && $_GET['target'] === "patient")
    {
        $PatientController -> getAllPatient();
    }
    else if ($_GET['action'] === "single" && $_GET['target'] === "patient" && $_GET['id'] >=0)
    {
        
        $PatientController -> singlePatient();
    }
    else if ($_GET['action'] === "update" && $_GET['target'] === "patient" && $_GET['id'] >=0)
    {
        $PatientController -> updatePatient();
    }
    else if ($_GET['action'] === "delete" && $_GET['target'] === "patient" && $_GET['id'] >=0)
    {
        $PatientController -> deletePatient();
    }
    else if ($_GET['action'] === 'create' && $_GET['target'] === "appointment")
    {
        $AppointmentController = new AppointmentsController();
        $AppointmentController -> create();
    }
    else if ($_GET['action'] === 'update' && $_GET['target'] === "appointment")
    {
        $AppointmentController = new AppointmentsController();
        $AppointmentController -> update();
    }
}
else
{
    require('./views/home.php');
}
