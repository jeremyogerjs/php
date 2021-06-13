<?php 
require('./controller/controllers.php'); 


if(isset($_GET['action']))
{
    if($_GET['action'] === "list")
    {
        getAllClientData();
    }
    elseif ($_GET['action'] === "showType")
    {
        getAllShowType();
    }
    elseif ($_GET['action'] === "listLimit")
    {
        getLimitClientData();
    }
    elseif ($_GET['action'] === "listLoyalty")
    {
        getLoyaltyClientData();
    }
    elseif ($_GET['action'] === "filterClient")
    {
        getFilterClientData();
    }
    elseif ($_GET['action'] === "show")
    {
        getAllShow();
    }
    else if ($_GET['action'] === 'clientFormat')
    {
        getClientFormat();
    }
}
else
{
    getAllClientData();
}





?>