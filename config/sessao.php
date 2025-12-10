<?php
// Iniciar sessão
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Se quiser bloquear páginas sem login descomente abaixo:
//
// if (!isset($_SESSION['usuario'])) {
//     header("Location: login.php");
//     exit;
// }
?>
