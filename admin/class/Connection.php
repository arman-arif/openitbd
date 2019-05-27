<?php

class Connection extends mysqli
{
    private $host = "localhost";
    private $username = "root";
    private $passwd = "";
    private $dbname = "openit_database";

    public function __construct()
    {
        parent::__construct($this->host, $this->username, $this->passwd, $this->dbname);

        if ($this->connect_error) {
            die("<h4 style='color: red'>Connection error!</h4>" . $this->connect_error);
        }
    }
}