<?php
include "../../config/conexao.php";

$id = $_GET['id'];
$sql = $pdo->prepare("SELECT * FROM produto WHERE id = ?");
$sql->execute([$id]);
$produto = $sql->fetch(PDO::FETCH_ASSOC);
?>

<form method="POST" action="update.php">

<input type="hidden" name="id" value="<?php echo $produto['id']; ?>">

<label>Nome:</label>
<input type="text" name="nome" value="<?php echo $produto['nome']; ?>"><br><br>

<label>Categoria:</label>
<input type="text" name="categoria" value="<?php echo $produto['categoria']; ?>"><br><br>

<label>Preço:</label>
<input type="number" step="0.01" name="preco" value="<?php echo $produto['preco']; ?>"><br><br>

<label>Estoque:</label>
<input type="number" name="estoque" value="<?php echo $produto['estoque']; ?>"><br><br>

<label>Validade:</label>
<input type="date" name="validade" value="<?php echo $produto['validade']; ?>"><br><br>

<label>Descrição:</label><br>
<textarea name="descricao"><?php echo $produto['descricao']; ?></textarea><br><br>

<button type="submit">Salvar Alterações</button>

</form>
