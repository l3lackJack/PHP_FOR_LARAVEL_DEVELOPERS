<?php

use Framework\Database\Connection;

class Database
{

public $config;
private $connection;
    public function __construct($config,$connection)
    {
        $this->config =$config;
        $this->connection= new Connection($config);
    }

    function selectAll($table){
        return  fetchAllTasks($this->connection->ConnectDB($this->config));

    }

    function insert(){
        //TODO
    }
}