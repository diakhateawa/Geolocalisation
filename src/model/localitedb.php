<?php
require_once 'Db.php';
function addLocalite($nom, $latitude, $longitude)
{
    $sql = "INSERT INTO localite
           VALUE (NULL, '$nom', $latitude, $longitude)";

    $db = getConection();
    $db ->exec($sql);
}
addLocalite ('Thies', 14.7914, -16.9257);



?>