<?php
include "../../config/conexao.php";
?>

<h2>Lista de Produtos</h2>

<a href="cadastrar.php">Cadastrar novo produto</a>
<br><br>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Estoque</th>
        <th>Ações</th>
    </tr>

<?php
$sql = $pdo->query("SELECT * FROM produto ORDER BY id DESC");
while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>
            <td>{$linha['id']}</td>
            <td>{$linha['nome']}</td>
            <td>R$ {$linha['preco']}</td>
            <td>{$linha['estoque']}</td>
            <td>
                <a href='editar.php?id={$linha['id']}'>Editar</a> |
                <a href='excluir.php?id={$linha['id']}'>Excluir</a>
            </td>
        </tr>";
}
?>
</table>

<br>
<a href="../../index.php">Voltar</a>
