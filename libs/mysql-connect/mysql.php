<?php
/**
 * Created by PhpStorm.
 * User: nayana
 * Date: 26/5/2560
 * Time: 19:53 น.
 */

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

class registry {
    public static $instance = null;
    public static $count = null;
    public static $result = null;
    public static $stmt = null;
}

class db {

}