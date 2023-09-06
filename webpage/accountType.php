<?php
include 'config.php'; 

if (isset($_SESSION["correo"])) {
    $correo = $_SESSION["correo"];
    $query = "SELECT accounttype FROM persona WHERE correo = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$correo]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user) {
        //echo $user["accounttype"];
        $_SESSION["accountType"] = $user["accounttype"];
    }
};

?>
