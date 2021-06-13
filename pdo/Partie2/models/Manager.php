<?php


class Manager
{
    private $_serverName;
    private $_userName;
    private $_password;
    private $_db_name;

    public function __construct ($donnees = array())
    {
        $this -> hydrate($donnees);
    }
    public function hydrate (array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            $method = 'set' .ucfirst($key);
            
            if(method_exists($this,$method))
            {
                $this -> $method($value);
            }
        }
    }
    

    protected function dbConnect ()
    {
        try{
            $conn = new PDO("mysql:host=" . $this->serverName() . ";dbname=" .$this ->dbName(), $this -> _userName, $this -> _password);
            $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo "connected success !";
            return $conn;
        }
        catch (PDOException $e)
        {
            echo "connected fail : " . $e ->getMessage();
        }
    }
    //getter
    public function serverName ()
    {
        return $this -> _serverName;
    }
    public function dbName ()
    {
        return $this -> _db_name;
    }
    //setter
    public function setServerName ($serverName)
    {
        $this -> _serverName = $serverName;
    }
    public function setUserName ($userName)
    {
        $this -> _userName = $userName;
    }
    public function setPassword ($password)
    {
        $this -> _password = $password;
    }
    public function setDbName ($dbName)
    {
        $this -> _db_name = $dbName;
    }

}