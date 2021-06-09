<?php
//db Connect
include 'functions_custom.php';

//model post
require('models/createStudent.php');

//model delete
require('models/deleteStudent.php');

//model getAll
require('models/allStudents.php');

//model getOne
require('models/singleStudent.php');

//model updateOne
require('models/updateStudent.php');

function createStd(){
    try{
        if(!empty($_POST)){
	
            if(createData()){
                header("location:index.php?action=list&statut=success&method=post");
            }
            else
            {
                header("location:index.php?action=create&statut=fail");
            }
        }
        else
        {
            require('./vue/form.php');
        }
    }
    catch(Exception $e)
    {
        echo "Erreur : " . $e ->getMessage();
    }
};

function deleteStd(){
    try{
        if(isset($_GET['id']) && $_GET['id'] > 0 ){
            deleteData();
            header("location:index.php?action=list");
            exit();
        }
        else{
           throw new Exception('Impossible de supprimer cette utilisateur');
        }
    }
    catch(Exception $e){
        echo 'Erreur : '. $e->getMessage();
    }
    
};

function allStd () {
    try{
        if(!empty(getAllData())){
            $data = getAllData();
             
            require('./vue/list_contact.php');
        }
        else
        {
            throw new Exception('Une erreur est survenue lors du chargement de la page veuillez rafraichir');
        }
    }
    catch(Exception $e)
    {
        echo "Erreur : ". $e->getMessage();
    }
};

function singleStd () {
    try{
        if(isset($_GET['id']) && $_GET['id'] > 0){
            $data = singleData();
            require('./vue/single.php');
        }
        else
        {
            throw new Exception('Impossible de sélectionner cette utilisateur veuillez réesayer');
        }
    }
    catch(Exception $e)
    {
        echo "Erreur : " . $e ->getMessage();
    }

};

function updateStd () {
    try{
        if(isset($_GET['id']) && $_GET['id'] > 0 ){
            $data = singleData();
            require('./vue/form.php');
            if(!empty($_POST)){
                if(updateData()){
                    header("location:index.php?action=list&statut=success&method=update");
                }
                else
                {
                    header("location:index.php?action=update&statut=fail");
                }
            }
        }
        else
        {
            throw new Exception('Votre edition n\'a pas abouti');
        }

    }
    catch(Exception $e)
    {
        echo "Erreur : " . $e ->getMessage();
    }
    
};