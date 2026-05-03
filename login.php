<?php
session_start();
require_once __DIR__ . '/../MY%20PETS%20PROYECT/Database/database.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$userInput = trim($_POST['usuario'] ?? '');
$password  = $_POST['contrasena'] ?? '';

if ($userInput === '' || $password === '') {
    header('Location: index.php?error=campos');
    exit;
}

$pdo = getConnection();

$stmt = $pdo->prepare('SELECT id, username, email, password_hash FROM users WHERE username = :user OR email = :email LIMIT 1');
$stmt->execute([
    ':user'  => $userInput, 
    ':email' => $userInput
]);
$user = $stmt->fetch();

if (!$user || !password_verify($password, $user['password_hash'])) {
    header('Location: index.php?error=credenciales');
    exit;
}

$_SESSION['user_id'] = $user['id'];
$_SESSION['username'] = $user['username'];

header('Location: tienda.html');
exit;
