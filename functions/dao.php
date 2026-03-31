<?php 

function getTasks(PDO $pdo): array | bool{
    $sql = "
        SELECT id, tarea
        FROM tareas;
    ";

    try{
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }catch(\PDOException $e){
        error_log($e->getMessage());
        return false;
        
    }
}

function getTaskById(PDO $pdo,int $task_id):array|false{
    $sql = "
        SELECT id, tarea
        FROM tareas 
        WHERE id = :id
    ";

    try{
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':id'=>$task_id
        ]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }catch(\PDOException $e){
        error_log($e->getMessage());
        return false;
    }
}

function setTask(PDO $pdo, string $task):int | false{
    $sql = "
    
    INSERT INTO tareas (tarea)
    VALUES(:task);
    ";

    try{
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':task', $task, PDO::PARAM_STR);
        $stmt->execute();
        return (int) $pdo->lastInsertId(); 
    }catch(\PDOException $e){
        error_log($e->getMessage());
        return false;
    }
}


function delTaskById(PDO $pdo, int $task_id): int|false{
    $sql = "
        DELETE FROM tareas
        WHERE id = :task_id
    ";

    try{
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':task_id',$task_id,PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->rowCount();
    }catch(\PDOException $e){
        error_log($e->getMessage());
        return false;
    }
}
    
function updateTaskById(PDO $pdo ,int $task_id, string $new_task):int|false{
    $sql="
    UPDATE tareas 
    SET tarea = :task 
    WHERE id = :task_id
    ";

    try{
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':task' => $new_task,
            ':task_id' => $task_id
        ]);
        return $stmt->rowCount();
    }catch(\PDOException $e){
        error_log($e->getMessage());
        return false;
    }
}
?>