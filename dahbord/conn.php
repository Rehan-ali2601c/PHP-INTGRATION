<?php
$server   = "localhost";
$username = "root";
$password = "";
$database = "store";

// Enable error reporting for mysqli (recommended for PHP 8+)
// mysqli_report(MYSQLI_REPORT_OFF);

$con = mysqli_connect($server, $username, $password, $database);

if ($con) { 
    // echo "connect successfull";
} else {
    // mysqli_connect_error() reveals the exact reason (e.g., Unknown database 'store')
    echo "Connection failed: " . mysqli_connect_error();
}
?>