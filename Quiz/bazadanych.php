<?php
$host="localhost";
$user="root";
$pass="";
$database="webquiz";

$mysqli = new mysqli($host,$user,$pass,$database);


if($mysqli->connect_error)
{
    echo ('Connection failed');
    exit();
}

?>