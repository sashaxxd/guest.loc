<?php

namespace guest\library\storage\database;

class PDOFabric
{
    private function __construct(){

    }

    public static function getInstance(){
        $ini = parse_ini_file('db.ini');
        return new \PDO($ini['driver'].':host=' . $ini['host'].';user='. $ini['user'].';password='. $ini['password']);
    }

}