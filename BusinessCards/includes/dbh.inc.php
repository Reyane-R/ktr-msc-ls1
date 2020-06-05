<?php

$tablesusername = "localhost";
$dBUserusername = "root";
$dBPassword = "";
$dBusername = "businesscards";

$conn = mysqli_connect($tablesusername, $dBUserusername, $dBPassword, $dBusername);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}