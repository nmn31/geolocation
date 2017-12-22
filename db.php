<?php

//https://linux7005.site4now.net:2083/cpsess6568782158/3rdparty/phpMyAdmin/sql.php?db=lx3krksj_geo&table=geo&pos=0
$servername = "mysql7002.site4now.net"; 
$username = "lx3krksj_narende";
$password = "dxdev@296";
$dbname = "lx3krksj_geo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>