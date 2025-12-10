<?php
include "../../config/conexao.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$preco = $_POST['preco'];
$estoque = $_POST['estoque'];
$validade = $_POST['validade'];
$descricao = $_POST['descricao'];

$sql = $pdo->prepare("
    UPDATE produto SET nome=?, categoria=?, preco=?, estoque=?, validade=?, descricao=?
    WHERE id=?
");

$sql->execute([$nome, $categoria, $preco, $estoque, $validade, $descricao, $id]);

header("Location: listar.php");
exit;
?>
