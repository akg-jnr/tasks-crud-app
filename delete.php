<?php

require "db.php";

$task_id = intval($_GET["id"] ?? 0);

if ($task_id > 0) {

    $stmt = $conn->prepare(
        "DELETE FROM tasks WHERE id = ?"
    );

    $stmt->bind_param(
        "i",
        $task_id
    );

    $stmt->execute();
    $stmt->close();
}

$conn->close();

header("Location: index.php");
exit;