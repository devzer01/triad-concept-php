<?php
/**
 * Created by PhpStorm.
 * User: nayana
 * Date: 26/5/2560
 * Time: 19:53 น.
 */

function mysql_connect($server, $username, $password) {
    return new PDO("mysql:host=$server", $username, $password);
}

class db {

}