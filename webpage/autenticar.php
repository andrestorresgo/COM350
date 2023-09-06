<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST["correo"];
    $pasword = $_POST["pasword"];
    $_SESSION["correo"] = $correo;

    $query = "SELECT * FROM persona WHERE correo = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$correo]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($pasword, $user["pasword"])) {
        $_SESSION["user_id"] = $user["ci"]; // Store user ID in the session
        $_SESSION["accountType"] = $user["accountType"]; // Store account type in the session
        header("Location: index.php"); // Redirect to landing page after successful login
    } else {
        echo "Credenciales incorrectas!";
    }
}
?>
