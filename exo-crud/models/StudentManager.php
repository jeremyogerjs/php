<?php
require('Manager.php');
class StudentManager extends Manager
{
    public function getAllData()
    {
        $db = $this -> dbConnect();

        if($db){
            try{
                $sql = "SELECT * FROM students";

                $result = $db->prepare($sql);
        
                $result ->execute();
        
                $results = $result->fetchAll(PDO::FETCH_ASSOC);
                return $results;
            }
            catch(PDOException $e)
            {
                echo 'Erreur: ' . $e->getMessage();
            }
        }
    }

    public function createData() 
    {
        $db = $this -> dbConnect();
        $firstName =  htmlspecialchars((!empty($_POST['firstName']) ? $_POST['firstName'] : ''));
        $lastName = htmlspecialchars((!empty($_POST['lastName']) ? $_POST['lastName'] : ''));
        $email = htmlspecialchars((!empty($_POST['email']) ? $_POST['email'] : ''));
        $phone = htmlspecialchars((!empty($_POST['phone']) ? $_POST['phone'] : ''));
        $age = htmlspecialchars((!empty($_POST['age']) ? $_POST['age'] : ''));
        
        if($db){
            
            try{
                $sql = "INSERT INTO students (first_name,last_name,email,phone,age) 
                        VALUES (?, ?, ?, ?, ?)";
                $result = $db->prepare($sql);
                $student = $result->execute([ $firstName, $lastName, $email, $phone, $age]);
                $success = true;
                echo "je créer !!";
                return $success;
            }
            catch (PDOException $e){
                $sucess = false;
                return $sucess;
            }
        }
    }

    public function deleteData () 
    {
        $id = $_GET['id'];
	    $db = $this -> dbConnect();

        if($db){
            try{
                $sql = "DELETE FROM students WHERE id= $id";
        
                $db->exec($sql);
                echo "delete success !";
                
            }
            catch(PDOException $e){
                echo "Error: " . $e->getMessage();
                
            }
        }
        else {
            return false;
        }
    }

    public function singleData ()
    {
        $db = $this -> dbConnect();
        if($db){
            try{
                $id = $_GET['id'];
                $sql = "SELECT * FROM students WHERE id= $id";
            
                $result = $db ->prepare($sql);
                $result ->execute();
            
                $results = $result ->fetchAll(PDO::FETCH_ASSOC);
                return $results;
            }
            catch(PDOException $e)
            {
                echo 'Erreur : '. $e->getMessage();
            }
        };
    }

    public function updateData () 
    {
        $firstName =  htmlspecialchars((!empty($_POST['firstName']) ? $_POST['firstName'] : ''));
        $lastName = htmlspecialchars((!empty($_POST['lastName']) ? $_POST['lastName'] : ''));
        $email = htmlspecialchars((!empty($_POST['email']) ? $_POST['email'] : ''));
        $phone = htmlspecialchars((!empty($_POST['phone']) ? $_POST['phone'] : ''));
        $age = htmlspecialchars((!empty($_POST['age']) ? $_POST['age'] : ''));
        $id = $_GET['id'];
        $db = $this -> dbConnect();

        if($db) {
            try{
                $sql = "UPDATE students SET 
                    first_name	= ?,
                    last_name	= ?, 
                    email		= ?, 
                    age			= ?, 
                    phone		= ? 
                WHERE id = ? ";
        
                $stmt = $db ->prepare($sql);
                $stmt->execute([$firstName,$lastName,$email,$age,$phone,$id]);
            
                return true;
            }
            catch (PDOException $e)
            {
                return false;
            }
        
        };

    }


}
