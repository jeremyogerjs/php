<?php
//db Connect
include 'functions_custom.php';

//model post
require('models/CreateStudent.php');

//model delete
require('models/DeleteStudent.php');

//model getAll
require('models/AllStudent.php');

//model getOne
require('models/SingleStudent.php');

//model updateOne
require('models/UpdateStudent.php');

function createStd(){
    
    if(!empty($_POST)){

        if(createData()){
            header("location:index.php?action=list&statut=success&method=post");
        }
        else
        {
            throw new Exception('Echec de l\'envoie du formulaire !');
            header("location:index.php?action=create&statut=fail");
        }
    }
    else
    {
        require('./vue/form.php');
    }
};

function deleteStd(){

    if(isset($_GET['id']) && $_GET['id'] > 0 ){
        deleteData();
        header("location:index.php?action=list");
        exit();
    }
    else{
        throw new Exception('Impossible de supprimer cette utilisateur');
    }
};

function allStd () {

    if(!empty(getAllData())){
        $data = getAllData();
            
        require('./vue/list_contact.php');
    }
    else
    {
        throw new Exception('Une erreur est survenue lors du chargement de la page veuillez rafraichir');
    }
};

function singleStd () {

    if(isset($_GET['id']) && $_GET['id'] > 0){
        $data = singleData();
        require('./vue/single.php');
    }
    else
    {
        throw new Exception('Impossible de sélectionner cette utilisateur veuillez réesayer');
    }
};

function updateStd () {

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
};