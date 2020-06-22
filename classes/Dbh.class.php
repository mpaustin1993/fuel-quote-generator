<?php

class Dbh
{
    private $host = "remotemysql.com";
    private $username = "vAYVZyoYeD";
    private $password = "O0YA8tiM2l";
    private $dbName = "vAYVZyoYeD";

    protected function connect()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;  //Database sort name
        $pdo = new PDO($dsn, $this->username, $this->password);  //PDO is the connection type of database
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}
