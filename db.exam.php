<?php

$host = "localhost";
$db_user = "augustus.gaisie";
$db_pass = "Godisthegreatest+GGMU";
$db_name = "ecommerce_2026A_augustus_gaisie";

$conn = new mysqli($host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}