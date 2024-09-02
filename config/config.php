<?php

ini_set('display_errors', 0);
error_reporting(E_ALL);

require __DIR__ . '/../vendor/autoload.php'; // Adjust the path to autoload.php based on your folder structure

use Dotenv\Dotenv;

// Load .env file
$dotenv = Dotenv::createImmutable(__DIR__."/../");
$dotenv->load();

// Access environment variables
$dbHost = $_ENV['DB_HOST'];
$dbName = $_ENV['DB_DATABASE'];
$dbUser = $_ENV['DB_USERNAME'];
$dbPass = $_ENV['DB_PASSWORD'];

$baseUrl = $_ENV['http://amoda_admin.test/'];

// Database connection using environment variables
$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=utf8mb4";
try {
    $pdo = new PDO($dsn, $dbUser, $dbPass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ]);
} catch (PDOException $e) {
    die('Database connection failed: ' . $e->getMessage());
}
?>
