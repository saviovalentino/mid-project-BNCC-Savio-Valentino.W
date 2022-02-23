<?php
// KONEKSI KE DATABASE
$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'online library';

try {
    $koneksi = new PDO("mysql:host=$host;dbname=$db_name", $user, $pass);
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $message) {
    echo $message->getMessage();
}

// BASE URL
require_once 'base-url.php';

// FUNCTIONS
require_once 'functions.php';
