<?php
include "../../config/conexao.php";

$id = $_GET['id'];

$sql = $pdo->prepare("DELETE FROM produto WHERE id = ?");
$sql->execute([$id]);

header("Location: listar.php");
exit;
?>
