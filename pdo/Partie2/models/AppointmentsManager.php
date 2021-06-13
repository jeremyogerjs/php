<?php
require_once('./models/Manager.php'); 
class Appointment extends Manager
{
    public function createAppointment ()
    {
        $db = $this ->dbConnect();

        if($db)
        {
            $date = strtotime(htmlspecialchars($_POST['date']) . htmlspecialchars($_POST['dateTime']));
            $idPatient = htmlspecialchars($_POST['idPatient']);
            $dateformat = date('Y-m-d H:i:s', $date);
        
            $sql = "INSERT INTO appointments (dateHour,idPatients) 
            VALUES ( ?, ?)";
            $result = $db ->prepare($sql);
        
            $result ->execute([$dateformat, $idPatient]);
            echo "record success !";
            return $result;
        }
    }
    public function updateAppointments ()
    {
        $db = $this -> dbConnect();

        if($db)
        {
            $date = strtotime(htmlspecialchars($_POST['date']) . htmlspecialchars($_POST['dateTime']));
            $id = htmlspecialchars($_GET['id']);
            $dateformat = date('Y-m-d H:i:s', $date);
        
            $sql = "UPDATE appointments SET dateHour = ? 
            WHERE id = $id ";
            $result = $db ->prepare($sql);
        
            $result ->execute([$dateformat]);
            echo "record success !";
            return $result;
        }
    }
    public function deleteAppointments ()
    {
        $db = $this ->dbConnect();
        if($db)
        {
            $id = $_GET['id'];
            $sql = "DELETE FROM appointments WHERE id = $id";
        
            $db -> exec($sql);
            echo "deleted success !";
        }
    }
    public function getAppointments ()
    {
        $db = $this -> dbConnect();
        if($db)
        {
            $sql = "SELECT * FROM appointments ";

            $result = $db -> prepare($sql);
        
            $result -> execute();
        
            $results = $result -> fetchAll(PDO::FETCH_ASSOC);
        
            return $results;
        }
    }
    public function getOneAppointments ()
    {
        $db = $this -> dbConnect();
        if($db)
        {
            $id = $_GET['id'];
            $sql = "SELECT * FROM patients LEFT JOIN appointments ON patients.id = appointments.idPatients WHERE patients.id = $id";
        
            $result = $db -> prepare($sql);
        
            $result -> execute();
        
            $results = $result -> fetchAll(PDO::FETCH_ASSOC);
            return $results;
        }
    }
}