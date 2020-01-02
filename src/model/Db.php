<?php
require_once 'Db.php';
function getConection(){
    $host = '127.0.0.1';
    $mysqluser = 'root';
    $password = '';
    $dbname = 'geolocalisationditi4';

    $dsn = "mysql:host=$host; dbname=$dbname";
    try{
        $db = new PDO($dsn, $mysqluser, $password);
        //code
    }catch (PDOException $ex){
        die('Error : '.$ex->getMessage());

    }
    return $db;

}

?>
