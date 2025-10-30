<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);  // Hash seguro
    $email = $_POST['email'];
    $edad = $_POST['edad'];

    $stmt = $pdo->prepare("INSERT INTO usuarios (username, password, email, edad) VALUES (?, ?, ?, ?)");
    if ($stmt->execute([$username, $password, $email, $edad])) {
        echo "<script>alert('Registro exitoso!'); window.location='login.html';</script>";
    } else {
        echo "<script>alert('Error: Usuario o email ya existe.');</script>";
    }
}
?>