<?php


class Client extends Manager
{
    public function getAllData ()
    {
        $db = $this -> dbConnect();

        if($db)
        {
            $sql = "SELECT * FROM clients";

            $result = $db -> prepare($sql);
        
            $result -> execute();
        
            $results = $result->fetchAll(PDO::FETCH_ASSOC);
        
            return $results;
        }
    }
    public function getFilterData ()
    {
        $db = $this -> dbConnect();
        if($db)
        {
            $sql = "SELECT * FROM clients LEFT JOIN cards ON clients.cardNumber = cards.cardNumber";

            $result = $db -> prepare($sql);
        
            $result -> execute();
        
            $results = $result->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        }
    }
    public function getLimitData ()
    {
        $db = $this -> dbConnect();

        if($db)
        {
            $sql = "SELECT * FROM clients LIMIT 20";

            $result = $db -> prepare($sql);

            $result -> execute();

            $results = $result ->fetchAll(PDO::FETCH_ASSOC);

            return $results;
        }
    }
    public function getLoyaltyData ()
    {
        $db = $this ->dbConnect();

        if($db)
        {
            $sql = "SELECT * FROM clients INNER JOIN cards ON clients.cardNumber= cards.cardNumber WHERE cardTypesId = 1";

            $result = $db -> prepare($sql);

            $result -> execute();

            $results = $result ->fetchAll(PDO::FETCH_ASSOC);

            return $results;
        }
    }
    public function getSearchData ()
    {
        $db = $this -> dbConnect();

        if($db)
        {
            $sql = "SELECT * FROM clients WHERE lastName LIKE 'm%' ORDER BY lastName";

            $result = $db ->prepare($sql);
        
            $result ->execute();
        
            $results = $result ->fetchAll(PDO::FETCH_ASSOC);
        
            return $results;
        }
    }
}

?>