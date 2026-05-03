<?php
session_start();
require_once __DIR__ . '/../MY%20PETS%20PROYECT/Database/database.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: registro.php');
    exit;
}

$ownerName   = trim($_POST['nombre_dueno'] ?? '');
$petName     = trim($_POST['nombre_mascota'] ?? '');
$email       = strtolower(trim($_POST['correo'] ?? ''));
$phone       = trim($_POST['contacto'] ?? '');
$username    = trim($_POST['usuario'] ?? '');
$password    = $_POST['contrasena'] ?? '';
$password2   = $_POST['confirmar_contrasena'] ?? '';

if ($ownerName === '' || $email === '' || $username === '' || $password === '' || $password2 === '') {
    header('Location: registro.php?error=campos');
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: registro.php?error=email');
    exit;
}

if (strlen($password) < 8) {
    header('Location: registro.php?error=passcorta');
    exit;
}

if ($password !== $password2) {
    header('Location: registro.php?error=nomatch');
    exit;
}

$pdo = getConnection();

// Verifica duplicados
$check = $pdo->prepare('SELECT 1 FROM users WHERE username = :user OR email = :email LIMIT 1');
$check->execute([
    ':user'  => $username,
    ':email' => $email,
]);

if ($check->fetch()) {
    header('Location: registro.php?error=existe');
    exit;
}

$hash = password_hash($password, PASSWORD_DEFAULT);

$insert = $pdo->prepare('INSERT INTO users (username, email, password_hash, owner_name, pet_name, phone) VALUES (:user, :email, :hash, :owner, :pet, :phone)');
$insert->execute([
    ':user'  => $username,
    ':email' => $email,
    ':hash'  => $hash,
    ':owner' => $ownerName,
    ':pet'   => $petName,
    ':phone' => $phone,
]);

$_SESSION['user_id'] = (int)$pdo->lastInsertId();
$_SESSION['username'] = $username;

header('Location: tienda.html');
exit;
