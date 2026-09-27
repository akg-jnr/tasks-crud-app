<?php
require "db.php";

$result = $conn->query("SELECT * FROM tasks ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tasks</title>
</head>

<body>

<h1>Augustus' Tasks Manager </h1>
<p>Keep track of tasks and their progress below.</p>
<a href="create.php">Create New Task</a>
<hr>

<?php while ($row = $result->fetch_assoc()): ?>

<div>

    <h3>
        <?php echo htmlspecialchars($row['title']); ?>
    </h3>

    <p>
        <?php echo htmlspecialchars($row['description']); ?>
    </p>

</p>


<p>
    <strong>Status:</strong>   

        <?php
        if ($row['status']==='pending'){
            echo "Pending";
        }elseif ($row['status'] === 'in_progress'){
            echo "In Progress";
        }elseif ($row['status'] === 'done') {
            echo "Completed";
        }
        ?>

    </p>

    <p>
        <strong>Created:</strong>
        <?php echo $row['created_at']; ?>
    </p>

    <a href="edit.php?id=<?php echo $row['id']; ?>">
        Edit Task
    </a>

    <a
        href="delete.php?id=<?php echo $row['id']; ?>"
        onclick="return confirm('Delete this task?');"
    >
        Delete Task
    </a>

</div>

<hr>

<?php endwhile; ?>