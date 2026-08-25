<?php

//requires
require_once __DIR__ . "/functions/dbconn.php";
require_once __DIR__ . "/functions/dao.php";

//DB conexiones
$pdo = connectDB();

//getters
$tasks = getTasks($pdo);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de tareas</title>
    <link rel="stylesheet" href="./public/css/styles.css">
</head>

<body>
    <div class="containner">
        <header class="header">
            <a href="./index.php">
                <img class="logo" src="./public/icons/TaskList-v9.svg" alt="logo">
            </a>
            <h1>Lista de tareas</h1>

        </header>
        <main class="main">
            <!--Navegación-->
            <!--Agregar tarea-->
            <a href="./insert/form-insert-task.php">
                <img class="insert__svg" src="./public/icons/add.svg" alt="insert-icon">
            </a>
            <br>




            <table>
                <thead>
                    <th>Tareas</th>
                </thead>

                <tbody>
                    <!--Mostrar tareas-->
                    <?php foreach ($tasks as $task): ?>
                        <tr>
                            <td><?php echo $task['tarea']; ?></td>

                            <!--Editar tarea-->
                            <td>
                                <form action="./update/form-update.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                                    <button type="submit">
                                        <img class="form__svg" src="./public/icons/edit.svg"></img>
                                    </button>
                                </form>
                            </td>

                            <!--Eliminar tarea-->
                            <td>
                                <form action="./delete/confirm-delete.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                                    <button type="submit">
                                        <img class="form__svg" src="./public/icons/delete.svg"></img>
                                    </button>
                                </form>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </main>

        <!--footer-->
        <footer class="footer">
            <p>&copy; PepeSR 2025-26 Lista de tareas</p>
        </footer>
    </div>
</body>

</html>