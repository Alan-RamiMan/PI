<?php
// session_start();
$DB_HOST=$_ENV["DB_HOST"];
$DB_USER=$_ENV["DB_USER"];
$DB_PASSWORD=$_ENV["DB_PASSWORD"];
$DB_NAME=$_ENV["DB_NAME"];
$DB_PORT=$_ENV["DB_PORT"];



// Create connection
$con = new mysqli("$DB_HOST","$DB_USER","$DB_PASSWORD","$DB_NAME","$DB_PORT");
// Check connection
// Verificar la conexión
if ($con->connect_error) {
    die("Conexión fallida: " . $con->connect_error);
}

echo "Conexión establecida correctamente";
?>