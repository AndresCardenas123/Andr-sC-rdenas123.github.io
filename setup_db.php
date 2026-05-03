<?php
require_once __DIR__ . '/../MY%20PETS%20PROYECT/Database/database.php';

header('Content-Type: text/plain; charset=utf-8');

try {
    $pdo = getConnection();

    $pdo->exec("
        CREATE TABLE IF NOT EXISTS salud (
            id INT AUTO_INCREMENT PRIMARY KEY,
            user_id INT NOT NULL,
            frecuencia_cardiaca VARCHAR(100) DEFAULT '',
            tiempo_activo VARCHAR(100) DEFAULT '',
            proxima_cita DATE NULL,
            vacunas VARCHAR(200) DEFAULT '',
            ultimo_bano VARCHAR(100) DEFAULT '',
            desparasitacion VARCHAR(100) DEFAULT '',
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            UNIQUE KEY uniq_salud_user (user_id)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    ");

    // Crear tabla perfil si no existe
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS perfil (
            id INT AUTO_INCREMENT PRIMARY KEY,
            user_id INT NULL,
            nombre VARCHAR(100) DEFAULT '',
            raza VARCHAR(100) DEFAULT '',
            peso VARCHAR(50) DEFAULT '',
            edad VARCHAR(50) DEFAULT '',
            color VARCHAR(100) DEFAULT '',
            sexo VARCHAR(50) DEFAULT ''
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    ");

    // Crear índice único para un perfil por usuario (si no existe)
    try {
        $pdo->exec("CREATE UNIQUE INDEX uniq_perfil_user ON perfil (user_id)");
    } catch (Throwable $e) {
        // Ignorar si ya existe
    }

    echo "OK: tablas y columnas listas.";
} catch (Throwable $e) {
    http_response_code(500);
    echo "Error: " . $e->getMessage();
}
