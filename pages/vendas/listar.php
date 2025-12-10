```php
<?php
include "../../config/conexao.php";
?>


<h2>Lista de Funcionários</h2>
<a href="cadastrar.php">Cadastrar novo funcionário</a>
<br><br>


<table border="1" cellpadding="5">
<tr>
<th>ID</th>
<th>Nome</th>
<th>Cargo</th>
<th>Telefone</th>
<th>Email</th>
<th>Ações</th>
</tr>
<?php
$sql = $pdo->query("SELECT * FROM funcionario ORDER BY id DESC");
while ($f = $sql->fetch(PDO::FETCH_ASSOC)) {
echo "<tr>
<td>{$f['id']}</td>
<td>{$f['nome']}</td>
<td>{$f['cargo']}</td>
<td>{$f['telefone']}</td>
<td>{$f['email']}</td>
<td>
<a href='editar.php?id={$f['id']}'>Editar</a> |
<a href='excluir.php?id={$f['id']}'>Excluir</a>
</td>
</tr>";
}
?>
</table>
<br>
<a href="../../index.php">Voltar</a>
```


---