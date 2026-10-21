<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo">Debyong Vlog</div>
        <a href="logout.php" class="logout">Logout</a>
    </nav>

    <div class="content">
        <h1>Hello, <?= htmlspecialchars($_SESSION["username"]) ?> 👋</h1>
        <p>Welcome to your dashboard. You are logged in.</p>
    </div>
</body>
</html>