<?php

require_once('./models/Manager.php');

class Patient extends Manager
{
    

    public function createPatient()
    {
        $db = $this ->dbConnect();
        if($db){
            $lastName = htmlspecialchars($_POST['lastName']);
            $firstName = htmlspecialchars($_POST['firstName']);
            $birthDate = htmlspecialchars($_POST['birthDate']);
            $phone = htmlspecialchars($_POST['phone']);
            $email = htmlspecialchars($_POST['email']);
            $sql = "INSERT INTO patients (lastname,firstname,birthdate,phone,mail) 
                    VALUES (?,?,?,?,?)";
            $result = $db ->prepare($sql);
            $result ->execute([$lastName,$firstName,$birthDate,$phone,$email]);
            echo "record success !";
            return true;
        }
        else
        {
            throw new Exception('Une erreur est survenue lors de la création !');
            return false;
        }
    }
    public function getPatient ()
    {
        $db = $this ->dbConnect();
        if($db)
        {
            $sql = "SELECT * FROM patients";
            $result = $db ->prepare($sql);
        
            $result ->execute();
        
            $results = $result ->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        }
        else
        {
            throw new Exception('Une erreur est survenue sur la bdd !');
        }
    }
    public function getFilterPatient ()
    {
        $db = $this ->dbConnect();
        if($db)
        {
            $search = htmlspecialchars($_POST['search']);
            $sql = "SELECT * FROM patients WHERE lastname LIKE '%$search%'";
        
            $result = $db -> prepare($sql);
        
            $result -> execute();
        
            $results = $result -> fetchAll(PDO::FETCH_ASSOC);
            return $results;
        }
    }
    public function getOnePatient ()
    {
        $db = $this -> dbConnect();
        if($db)
        {
            $id = $_GET['id'];
            $sql = "SELECT * FROM patients WHERE id=$id";
    
            $result = $db ->prepare($sql);
    
            $result ->execute();
    
            $results = $result ->fetch(PDO::FETCH_ASSOC);
            return $results;
        }
    }
    public function updatePatient ()
    {
        $db = $this -> dbConnect();
        if($db)
        {
            $lastName = htmlspecialchars($_POST['lastName']);
            $firstName = htmlspecialchars($_POST['firstName']);
            $birthDate = htmlspecialchars($_POST['birthDate']);
            $phone = htmlspecialchars($_POST['phone']);
            $email = htmlspecialchars($_POST['email']);
            $id = $_GET['id'];
            $sql = "UPDATE patients SET 
                    lastname    = ?,
                    firstname   = ?,
                    birthdate   = ?,
                    phone       = ?,
                    mail        = ? 
                    WHERE id    = ? ";
            $result = $db ->prepare($sql);
            $result ->execute([$lastName,$firstName,$birthDate,$phone,$email,$id]);
            echo "Update success !";
            return $result;
        }
    }
    public function deletePatient ()
    {
        $db = $this -> dbConnect();

        if($db)
        {
            $id = $_GET['id'];
            $sql = "DELETE FROM patients WHERE id= $id";

            $db -> exec($sql);
            echo "deleted success !";
        }
    }
}