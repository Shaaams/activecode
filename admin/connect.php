<?php
$servername  = "localhost";
$username    = "root";
$password    = "";
$dbName      ="iptv";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbName);
        mysqli_set_charset($conn, "utf8");

// Check connection
if (! $conn) {

    echo mysqli_connect_error("Connected Failed") . mysqli_connect_error();
}else{
    echo "Connected successfully";
}

function closeDb($conn)
{
    global $conn;
    mysqli_close($conn);
}