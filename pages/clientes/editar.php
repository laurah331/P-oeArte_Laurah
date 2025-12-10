`php
<?php
include "../../config/conexao.php";
$id = $_GET['id'];
$sql = $pdo->prepare("SELECT * FROM cliente WHERE id = ?");
sql->execute([$id]);
$cli = $sql->fetch(PDO::FETCH_ASSOC);
?>


<h2>Editar Cliente</h2>
<form method="POST" action="update.php">
<input type="hidden" name="id" value="<?php echo $cli['id']; ?>">


<label>Nome:</label>
<input type="text" name="nome" value="<?php echo $cli['nome']; ?>"><br><br>


<label>Telefone:</label>
<input type="text" name="telefone" value="<?php echo $cli['telefone']; ?>"><br><br>


<label>Email:</label>
<input type="email" name="email" value="<?php echo $cli['email']; ?>"><br><br>


<label>Endereço:</label><br>
<textarea name="endereco"><?php echo $cli['endereco']; ?></textarea><br><br>


<button type="submit">Salvar Alterações</button>
</form>
<br>
<a href="listar.php">Voltar</a>
```


---