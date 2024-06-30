<?php

namespace comments\core;

class Model
{
    private $pdo;
    public function db_connect()
    {
        $config = require_once __DIR__ . '/../config.php';
        $pdo = new \PDO($config['db']['server'].":host=".$config['db']['host'].";port=".$config['db']['port'].";dbname=".$config['db']['dbname'],$config['db']['user'],$config['db']['password']);
        return $pdo;
    }
}