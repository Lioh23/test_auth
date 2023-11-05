<?php

session_start();

function getConnection() {
    $host = '127.0.0.1';
    $port = '3306';
    $dbname = 'test_auth';
    $user = 'root';
    $password = '';

    try {
        $connection = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $password);
    
        return $connection;
    } catch(PDOException $exception) {

        return null;
    }
}