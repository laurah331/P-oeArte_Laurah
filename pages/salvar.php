<?php
include "../../config/conexao.php";

$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$preco = $_POST['preco'];
$estoque = $_POST['estoque'];
$validade = $_POST['validade'];
$descricao = $_POST['descricao'];

$sql = $pdo->prepare("
    INSERT INTO produto (nome, categoria, preco, estoque, validade, descricao)
    VALUES (?, ?, ?, ?, ?, ?)
");

$sql->execute([$nome, $categoria, $preco, $estoque, $validade, $descricao]);

header("Location: listar.php");
exit;
?>
