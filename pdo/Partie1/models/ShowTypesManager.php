<?php

require('./Manager.php');

class ShowType extends Manager
{
    public function getAllData ()
    {
        $db = $this -> dbConnect();
        if($db)
        {
            $sql = "SELECT * FROM showtypes";

            $result = $db -> prepare($sql);
        
            $result -> execute();
        
            $results = $result -> fetchAll(PDO::FETCH_ASSOC);
        
            return $results;
        }
    }
}

?>