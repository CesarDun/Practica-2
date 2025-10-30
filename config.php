<?php
$servername = "localhost";
$username_bd = "root";  // Usuario por defecto de XAMPP
$password_bd = "";      // Contraseña por defecto (vacía)
$dbname = "paginalogeo";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username_bd, $password_bd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>