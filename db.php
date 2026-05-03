<?php
$host = '127.0.0.1';
$user = 'root';
$pass = '';
$db   = 'bd_my_pets';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die('Error de conexión: ' . $conn->connect_error);
}
$conn->set_charset('utf8mb4');
