```php
<?php
include "../../config/conexao.php";
$id = $_GET['id'];


$sql = $pdo->prepare("SELECT * FROM funcionario WHERE id = ?");
$sql->execute([$id]);
$f = $sql->fetch(PDO::FETCH_ASSOC);
?>


<h2>Editar Funcionário</h2>
<form method="POST" action="update.php">
<input type="hidden" name="id" value="<?php echo $f['id']; ?>">


<label>Nome:</label>
<input type="text" name="nome" value="<?php echo $f['nome']; ?>" required><br><br>


<label>Cargo:</label>
<input type="text" name="cargo" value="<?php echo $f['cargo']; ?>" required><br><br>


<label>Telefone:</label>
<input type="text" name="telefone" value="<?php echo $f['telefone']; ?>"><br><br>


<label>Email:</label>
<input type="email" name="email" value="<?php echo $f['email']; ?>"><br><br>


<label>Salário:</label>
<input type="number" step="0.01" name="salario" value="<?php echo $f['salario']; ?>"><br><br>


<button type="submit">Salvar Alterações</button>
</form>
<br>
<a href="listar.php">Voltar</a>
```


---