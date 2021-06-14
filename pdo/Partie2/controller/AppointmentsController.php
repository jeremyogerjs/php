<?php

require_once('./models/AppointmentsManager.php');

class AppointmentsController
{
    public function create ()
    {
        require_once('./db-config.php');
        $Appointment = new Appointment($config);
        if(!empty($_POST))
        {
            if($Appointment -> createAppointment())
            {
                header("location:index.php?action=list&target=appointment");
            }
        }
        else
        {
            require('./views/ajout-rendezvous.php');
        }
    }

    public function update ()
    {
        require_once('./db-config.php');
        $Appointment = new Appointment($config);
        if($_GET['id'] >=0 && isset($_GET["id"]))
        {
            if(!empty($_POST))
            {
                if ($Appointment -> updateAppointments())
                {
                    header('location:index.php?actione=list&target=appointment');
                }
            }
            else
            {
                require('./views/ajout-rendezvous.php');
            }
        }
    }
}