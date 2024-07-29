<?php

$servername = "localhost";
$username = "root";
$password = "";
$database_name = "mintra-e-comarce";

$con = new mysqli($servername, $username, $password, $database_name);

if ($con->connect_error) {
    echo "connection failed" . $con->connect_error;
}
