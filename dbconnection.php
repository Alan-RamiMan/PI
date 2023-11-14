<?php
session_start();
// $DB_HOST=$_ENV["DB_HOST"];
// $DB_USER=$_ENV["DB_USER"];
// $DB_PASSWORD=$_ENV["DB_PASSWORD"];
// $DB_NAME=$_ENV["DB_NAME"];
// $DB_PORT=$_ENV["DB_PORT"];


$DB_HOST="viaduct.proxy.rlwy.net";
$DB_USER="railway";
$DB_PASSWORD="gCbeAE16haG5gGE53f1aaCG4cabDAf65";
$DB_NAME="19716";
$DB_PORT="root";

// Create connection
$con = mysqli_connect("$DB_HOST","$DB_USER","$DB_PASSWORD","$DB_NAME","$DB_PORT");
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
mysqli_close($con);
?>