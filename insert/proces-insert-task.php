<?php
require_once __DIR__ . "/../functions/dbconn.php";
require_once __DIR__ . "/../functions/dao.php";
$pdo = connectDB();
$result = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $task = $_POST['task'] ?? '';


    if (!empty($task)) {
        $task_id = setTask($pdo, $task);

        if ($task_id) {
            $result = "Tarea agregada correctamente.";
        } else {
            echo "error de inserción";
        }
    } else {
        echo "error: campo vacío";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de tareas</title>
    <link rel="stylesheet" href="../src/css/styles.css">
</head>

<body>
    <div class="containner">
        <header class="header">
            <a href="../index.php">
                <img class="logo" src="../src/icons/TaskList-v9.svg" alt="logo">
            </a>
            <h1>Lista de tareas</h1>

        </header>
        <main class="main">
            <h1>Resultado:</h1>
            <?php echo $result; ?>
            <nav>
                <a href="./../index.php">Inicio</a>
                <a href="./form-insert-task.php">Insertar</a>
            </nav>
        </main>
        <footer class="footer">
            <p>&copy; PepeSR 2025-26 Lista de tareas</p>
        </footer>
    </div>

</body>

</html>