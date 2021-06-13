<?php


require_once('../models/ClientManager.php');
require_once('../models/ShowManager.php');
require_once('../models/ShowTypesManager.php');


function getAllClientData ()
{
    require('../db-config.php');
    $ClientManager = new Client($config);

    if(!empty($ClientManager -> getAllData()))
    {
        $results = $ClientManager -> getAllData();

        require('../views/exo1.php');
    }
    else
    {
        throw new Exception("Une erreur est survenu !");
    }
}
function getAllShowType ()
{
    require('../db-config.php');
    $ShowTypeManager = new ShowType($config);

    if(!empty($ShowTypeManager -> getAllData()))
    {
        $results = $ShowTypeManager -> getAllData();

        require('../views/exo2.php');
    }
}
function getLimitClientData ()
{
    require('../db-config.php');
    $ClientManager = new Client($config);
    if(!empty($ClientManager -> getLimitData()))
    {
        $results = $ClientManager -> getLimitData();

        require ('../views/exo3.php');
    }
}
function getLoyaltyClientData ()
{
    require('../db-config.php');
    $ClientManager = new Client($config);

    if(!empty($ClientManager -> getLoyaltyData()))
    {
        $results = $ClientManager -> getLoyaltyData();

        require('../views/exo4.php');
    }
}
function getFilterClientData ()
{
    require('../db-config.php');
    $ClientManager = new Client($config);
    if(!empty($ClientManager -> getSearchData()))
    {
        $results = $ClientManager -> getSearchData();

        require('../views/exo5.php');
    }
}


function getAllShow ()
{
    require ('../db-config.php');

    $ShowManager = new Show($config);

    if(!empty($ShowManager -> getAllData()))
    {
        $results = $ShowManager -> getAllData();

        require('../views/exo6.php');
    }
}

function getClientFormat ()
{
    require('../db-config.php');

    $ClientManager = new Client($config);

    if(!empty($ClientManager -> getFilterData()))
    {
        $results = $ClientManager -> getFilterData();

        require('../views/exo7.php');
    }
}




