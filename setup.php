<?php

require "db.php";

$sql = "CREATE TABLE IF NOT EXISTS tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    status ENUM('pending', 'in_progress', 'done') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Task table created successfully!</h2>";
    echo "<p>The application is ready to use.</p>";
    echo "<p><a href='index.php'>Go to Tasks App</a></p>";
} else {
    echo "There was a problem creating the tasks table:" . $conn->error;
}

$conn->close();