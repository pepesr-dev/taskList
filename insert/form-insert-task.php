
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
            <h1>Formulario de inserción</h1>
            <br>
            <form action="./proces-insert-task.php" method="post">
                <label>Tarea: <input type="text" name="task"></label>
                <input type="submit" value="Insertar">
            </form>
            <br>
            <nav class="nav">
                <a href="../index.php">Inicio</a>
            </nav>
        </main>
        
        <footer class="footer">
            <p>&copy; PepeSR 2025-26 Lista de tareas</p>
        </footer>
    </div>
</body>
</html>