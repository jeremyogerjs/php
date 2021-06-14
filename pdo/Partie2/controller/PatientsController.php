<?php
require_once('./models/PatientManager.php');


class PatientController 
{


    public function createPatient ()
    {
        require_once('./db-config.php');
        $Patient = new Patient($config);
        if(!empty($_POST))
        {
            if($Patient -> createPatient())
            {
                header("location:index.php?action=list&target=patient");
            }
        }
        else
        {
            require('./views/ajout-patient.php');
        }
    }
    
    public function getAllPatient ()
    {
    
        require_once('./db-config.php');
        $Patient = new Patient($config);
    
        if(!empty($Patient -> getPatient()))
        {
            $results = $Patient ->getPatient();
    
            require('./views/liste-patients.php');
        }
    }
    
    public function singlePatient ()
    {
        require_once('./db-config.php');
        $Patient = new Patient($config);
    
        if(!empty($Patient -> getOnePatient()))
        {
            $results = $Patient -> getOnePatient();
            print_r($results);
            require('./views/profil-patient.php');
        }
    }
    
    public function updatePatient ()
    {
        require_once('./db-config.php');
        $Patient = new Patient($config);
    
        if(!empty($_POST))
        {
            if(!empty($Patient -> updatePatient()))
            {
                header("location:index.php?action=list&target=patient");
            }
        }
        else
        {
            $results = $Patient -> getOnePatient();
            require('./views/updatePatient.php');
        }
    }
    
    public function deletePatient ()
    {
        require_once("./db-config.php");
        $Patient = new Patient($config);
    
        if($_GET['id'] && $_GET['id'] >= 0)
        {
            $Patient -> deletePatient();
        }
    }
}