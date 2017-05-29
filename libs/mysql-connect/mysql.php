<?php

function mysql_connect($server, $username, $password) {
    registry::$instance= new PDO("mysql:host=$server", $username, $password);
    return registry::$instance;
}

function mysql_select_db($dbname)
{
    registry::$instance->query('use ' . $dbname);
    return true;
}

function mysql_query($sql) {
    $stmt = registry::$instance->prepare($sql);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    registry::$count = count($rows);
    registry::$stmt = $stmt;
    return $rows;
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
        //registry::$instance = n
    }
}

class db {

}