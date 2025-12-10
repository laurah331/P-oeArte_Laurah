`php
<?php
include "../../config/conexao.php";
?>


<h2>Lista de Clientes</h2>
<a href="cadastrar.php">Cadastrar novo cliente</a>
<br><br>


<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Nome</th>
<th>Telefone</th>
<th>Email</th>
<th>Ações</th>
</tr>


<?php
$sql = $pdo->query("SELECT * FROM cliente ORDER BY id DESC");
while ($c = $sql->fetch(PDO::FETCH_ASSOC)) {
echo "<tr>
<td>{$c['id']}</td>
<td>{$c['nome']}</td>
<td>{$c['telefone']}</td>
<td>{$c['email']}</td>
<td>
<a href='editar.php?id={$c['id']}'>Editar</a> |
<a href='excluir.php?id={$c['id']}'>Excluir</a>
</td>
</tr>";
}
?>
</table>
<br>
<a href="../../index.php">Voltar</a>
```


---