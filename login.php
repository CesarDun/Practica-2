<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        // Alerta de éxito con redirección
        echo "
<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
<script>
alert('Login correcto');
</script>";
exit();

    } else {
        // Alerta de error
        echo "<script>alert('Error en iniciar sesion!'); window.location='login.html';</script>";
        exit();
    }
}
?>
