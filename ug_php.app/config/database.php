<?php

$host = 'db';
$dbname = 'example_db';
$user = 'example_user';
$password = 'example_password';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $password);
} catch(PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}
