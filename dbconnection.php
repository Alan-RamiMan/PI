<?php
$DB_HOST="viaduct.proxy.rlwy.net"
$DB_NAME="railway"
$DB_PASSWORD="gCbeAE16haG5gGE53f1aaCG4cabDAf65"
$DB_USER="root"

// Create connection
$conn = mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>