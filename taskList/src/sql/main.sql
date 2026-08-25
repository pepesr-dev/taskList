-- Active: 1787673075962@@127.0.0.1@3307@taskList_db

CREATE TABLE IF NOT EXISTS `tareas` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `tarea` VARCHAR(255) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- Insertar un par de tareas de prueba para verificar que la web las muestra
INSERT INTO
    `tareas` (`tarea`)
VALUES (
        'Configurar el entorno Docker con PHP y MySQL'
    ),
    (
        'Probar la conexión de la app taskList'
    );