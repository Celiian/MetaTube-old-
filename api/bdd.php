<?php

// tableau de config de la DB
$config_db = [
    'host' => '93.16.2.231',
    'port' => '3306',
    'dbname' => 'metatube',
    'user' => 'codeur',
    'pass' => 'coding'
];

    $connString = 'mysql:host=' . $config_db['host'] . ';dbname=' . $config_db['dbname'] . ';port=' . $config_db['port'] . '';

    try
    {
        // $conn = new PDO($connString, $config_db['user'], $config_db['pass']);
        $conn = new mysqli($config_db['host'],$config_db['user'],$config_db['pass'],$config_db['dbname']);
        //$_SESSION['conn'] = $conn;

        $connectionStat = true;
    }
    catch (Exception $e) {
        echo 'Connection à la base de donnée impossible. ' . $e->getMessage();
        $connectionStat = false;
    }
?>