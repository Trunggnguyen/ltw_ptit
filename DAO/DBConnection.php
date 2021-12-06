<?php

class DBConnection
{

    private $conn;
    private $host;
    private $user;
    private $password;
    private $dbName;
    private $port;

    function __construct($params = array())
    {
        $this->conn = false;
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->dbName = 'nhanvien';
        $this->port = '3306';
        $this->connect();
    }

    function __destruct()
    {
        $this->disconnect();
    }

    private function connect()
    {

        if (!$this->conn) {

            try {

                $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbName . '', $this->user, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

                if (!$this->conn) {
                    $this->status_fatal = true;
                    echo 'Connection BDD failed';
                    die();
                }
            } catch (Exception $e) {
                die('Error : ' . $e->getMessage());
            }
        }

        return $this->conn;
    }

    function disconnect()
    {
        if ($this->conn) {
            $this->conn = null;
        }
    }

    function getOne($query)
    {

        $result = $this->conn->prepare($query);
        $ret = $result->execute();

        if (!$ret) {
            echo 'PDO::errorInfo():';
            echo '<br />';
            echo 'error SQL: ' . $query;
            die();
        }

        $result->setFetchMode(PDO::FETCH_ASSOC);
        $response = $result->fetch();

        return $response;
    }

    function getAll($query)
    {

        $result = $this->conn->prepare($query);
        $ret = $result->execute();

        if (!$ret) {
            echo 'PDO::errorInfo():';
            echo '<br />';
            echo 'error SQL: ' . $query;
            die();
        }

        $result->setFetchMode(PDO::FETCH_ASSOC);
        $response = $result->fetchAll();

        return $response;
    }

    function execute($query)
    {

        $response = $this->conn->exec($query);
        return $response;
    }
}


