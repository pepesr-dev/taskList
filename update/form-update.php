<?php

//Formulario de edición de tareas
require_once __DIR__ . "/../functions/dao.php";
require_once __DIR__ . "/../functions/dbconn.php";


$pdo = connectDB();


/**
 * 
 * Cargar datos para editar.
 * Obtener tarea si el ID es válido.
 */


//Inicializar variables vara evitar UNDEFINED
$task_data = null;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $task_id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
    if ($task_id > 0) {

        $task_data = getTaskById($pdo, $task_id);
    } else {

        echo "El ID seleccionado no es válido.";
    }
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de tareas</title>
    <link rel="stylesheet" href="../src/css/styles.css">
</head>

<body>
    <div class="containner">
        <header>
            <a href="../index.php">
                <img class="logo" src="../src/icons/TaskList-v9.svg" alt="logo">
            </a>
            <h1>Lista de tareas</h1>

        </header>


        <main class="main">
            <!--Mostrar tarea si los datos son correctos-->
            <?php if ($task_data): ?>
                <h1>Tarea encontrada:</h1>

                <p>ID: <?php echo $task_data['id'];  ?></p>
                <p>Tarea: <?php echo htmlspecialchars($task_data['tarea']);  ?></p>

                <br>

                <!--Editar tarea-->
                <form action="./proces-update.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $task_data['id']; ?>">

                    <!--Required / Value / htmlspecialchars-->
                    <label>Tarea Nueva: <input type="text" name="task" value="<?php echo htmlspecialchars($task_data['tarea']); ?>" required></label>
                    <input type="submit" value="Guardar cambios">
                </form>


            <?php else: ?>
                <p>No se ha podido cargar la información de la tarea.</p>
            <?php endif; ?>
            <br>

            <a href="../index.php">Inicio</a>
        </main>
        <footer class="footer">
            <p>&copy; PepeSR 2025-26 Lista de tareas</p>
        </footer>
    </div>
</body>

</html>