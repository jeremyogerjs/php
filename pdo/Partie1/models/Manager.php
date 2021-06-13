<?php

class Manager
{
    private $_serverName;
    private $_userName;
    private $_password;
    private $_dbName;
    
    public function __construct($valeurs = array())
    {
        $this -> hydrate($valeurs);
    }

    public function hydrate ($donnees)
    {
        foreach ($donnees as $key => $value)
        {
            $method = 'set' . ucfirst($key);
            if(method_exists($this,$method))
            {
                $this -> $method($value);
            }
        }
    }
    protected function dbConnect ()
    {
        try
        {
            $conn = new PDO("msql:host=$this->_serverName;dbname=$this->_dbName",$this->_userName,$this->_password);

            $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "connected success !!";
            return $conn;
        }
        catch (PDOException $e)
        {
            echo "Connection failed:" . $e -> getMessage();
        }
    }

    //setter

    public function setServerName($serverName)
    {
        $this -> _serverName = $serverName;
    }
    public function setUserName($userName)
    {
        $this -> _userName = $userName;
    }
    public function setPassword($password)
    {
        $this -> _password = $password;
    }
    public function setDbName($dbName)
    {
        $this -> _dbName = $dbName;
    }
}