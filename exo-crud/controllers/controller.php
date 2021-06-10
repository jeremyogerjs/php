<?php


//model Students
require_once('./models/StudentManager.php');

function createStd () {
    
    if(!empty($_POST)){
        $create = new StudentManager();
        if($create -> createData()){
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

function deleteStd () {
    $delete = new StudentManager() ;
    if(isset($_GET['id']) && $_GET['id'] > 0 ){
        $delete -> deleteData();
        header("location:index.php?action=list");
        exit();
    }
    else{
        throw new Exception('Impossible de supprimer cette utilisateur');
    }
};

function allStd () {
    $studentManager = new StudentManager();
    if(!empty($studentManager -> getAllData())){
        $data = $studentManager -> getAllData();
            
        require('./vue/list_contact.php');
    }
    else
    {
        throw new Exception('Une erreur est survenue lors du chargement de la page veuillez rafraichir');
    }
};

function singleStd () {
    $studentManager = new StudentManager();
    if(isset($_GET['id']) && $_GET['id'] > 0){
        $data = $studentManager -> singleData();
        require('./vue/single.php');
    }
    else
    {
        throw new Exception('Impossible de sélectionner cette utilisateur veuillez réesayer');
    }
};

function updateStd () {
    $studentManager = new StudentManager();
    if(isset($_GET['id']) && $_GET['id'] > 0 ){
        $data = $studentManager -> singleData();
        require('./vue/form.php');
        if(!empty($_POST)){
            if($studentManager -> updateData()){
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