<?php

function mysql_connect($server, $username, $password) {
    registry::$instance= new PDO("mysql:host=$server", $username, $password, [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    return registry::$instance;
}

function mysql_select_db($dbname)
{
    registry::$instance->query('use ' . $dbname);
    return true;
}

function mysql_query($sql) {
    try {
        $stmt = registry::$instance->prepare($sql);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        registry::$count = count($rows);
        registry::$stmt = $stmt;
        return $rows;
    } catch (Exception $e) {
        //echo $e->getMessage();
    }
}

function mysql_num_rows() {
    return registry::$count;
}

function mysql_fetch_assoc() {
    return registry::$stmt->fetch(PDO::FETCH_ASSOC);
}

function instance() {
    //return
}



class registry {
    public static $instance = null;
    public static $count = null;
    public static $result = null;
    public static $stmt = null;
    public static $topic = null;

    public static function execute($sql, $params) {
        $pdo = new PDO("mysql:host=" . MYSQL_SERVER . ';dbname=' . MYSQL_DATABASE, MYSQL_USERNAME, MYSQL_PASSWORD, [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        return $pdo->lastInsertId();
    }

    private static function setup($sql, $params)
    {
        self::$instance = new PDO("mysql:host=" . MYSQL_SERVER . ';dbname=' . MYSQL_DATABASE, MYSQL_USERNAME, MYSQL_PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        self::$stmt = self::$instance->prepare($sql);
        self::$stmt->execute($params);
    }

    public static function select($sql, $params)
    {
        self::setup($sql, $params);
        return self::$stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

class db {

}