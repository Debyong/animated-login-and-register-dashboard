<?php
// db.php — no echo/output here! Output before header() redirects causes errors.
 $conn = mysqli_connect("localhost", "root", "", "debyongvlog_db");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8mb4");
?>