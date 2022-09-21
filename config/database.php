<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'super_admin');
define('DB_PASS', 'singosari1234');
define('DB_NAME', 'db_sorting_siswa');

// connect to database
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

try {
    $conn->connect_error;
} catch (Exception $e) {
    die('Connection Failed!' . $conn->connect_error . $e);
}

echo 'Connected!';
