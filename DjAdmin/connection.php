<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "djadmin";

$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("connection Failed");
} else {

    // echo "Connection Sucessfull";
}
