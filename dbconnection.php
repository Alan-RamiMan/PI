<?php


$envFile = __DIR__ . '/.env';

if (file_exists($envFile)) {
    $envVariables = parse_ini_file($envFile, false, INI_SCANNER_RAW);

    foreach ($envVariables as $key => $value) {
        // Establecer las variables de entorno solo si no están definidas previamente
        if (!isset($_ENV[$key]) && !isset($_SERVER[$key])) {
            $_ENV[$key] = $value;
            $_SERVER[$key] = $value;
        }
    }
}


$DB_HOST = $_ENV['DB_HOST'] ?? '';
$DB_USER = $_ENV['DB_USER'] ?? '';
$DB_PASSWORD = $_ENV['DB_PASSWORD'] ?? '';
$DB_NAME = $_ENV['DB_NAME'] ?? '';
$DB_PORT = $_ENV["DB_PORT"]?? '';


// Create connection
$conn = mysqli_connect("$DB_HOST","$DB_USER","$DB_PASSWORD","$DB_NAME","$DB_PORT");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>