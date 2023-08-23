<?php
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "admissions_db";
$dbPort = 3307;
$dbPort = (int)$dbPort;

// Use the retrieved values as needed
$ConnStrx = mysqli_connect($dbHost, $dbUsername, $dbPassword,$dbName,$dbPort);

if(!$ConnStrx)
{
    die("error: ".mysqli_connect_error($ConnStrx));
}

?>