<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ci = $_POST["ci"];
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $sexo = $_POST["sexo"];
    $celular = $_POST["celular"];
    $correo = $_POST["correo"];
    $pasword = password_hash($_POST["pasword"], PASSWORD_DEFAULT);
    $fechaRegistro = date("Y-m-d H:i:s");
    $accountType = $_POST["accountType"];

    try {
        $query = "INSERT INTO persona (ci, nombre, apellidos, sexo, celular, correo, pasword, fechaRegistro, accountType)
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$ci, $nombre, $apellidos, $sexo, $celular, $correo, $pasword, $fechaRegistro, $accountType]);
        echo "Registro exitoso!";
        header("Location: login.php");
    } catch (PDOException $e) {
        echo "Registration failed: " . $e->getMessage();
    }
}
?>
