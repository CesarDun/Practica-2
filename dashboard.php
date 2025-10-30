<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['username'] ?? 'Usuario'); ?>!</h1>
    <a href="logout.php">Cerrar Sesión</a>
</body>
</html>