<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $aula = $_POST["aula"];
    $estado = $_POST["estado"];

    try {
        $query = "INSERT INTO aulas (aula, estado)
                  VALUES (?, ?)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$aula, $estado]);
        echo "Registro exitoso!";
        header("Location: registrarAulas.php");
    } catch (PDOException $e) {
        echo "Registration failed: " . $e->getMessage();
    }
}
?>
