<?php
date_default_timezone_set('Asia/Jakarta');
$base_url = 'http://localhost/kuliner/';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_kuliner";

//create connection
$conn = new mysqli ($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_errno){

    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}

// echo "connected sucsesfully";

?>