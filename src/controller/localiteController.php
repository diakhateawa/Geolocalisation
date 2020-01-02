<?php
require_once '../model/localitedb.php';

extract($_POST);
// $date = $_POST['date'];

$result = addLocalite($nom = $_POST['nom'], $latitude = $_POST['latitude'], $longitude = $_POST['longitude']);



?>