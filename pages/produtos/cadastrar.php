<form method="POST" action="salvar.php">

    <label>Nome:</label><br>
    <input type="text" name="nome" required><br><br>

    <label>Categoria:</label><br>
    <input type="text" name="categoria"><br><br>

    <label>Preço:</label><br>
    <input type="number" step="0.01" name="preco" required><br><br>

    <label>Estoque:</label><br>
    <input type="number" name="estoque" required><br><br>

    <label>Validade:</label><br>
    <input type="date" name="validade"><br><br>

    <label>Descrição:</label><br>
    <textarea name="descricao"></textarea><br><br>

    <button type="submit">Salvar Produto</button>
</form>

<br>
<a href="listar.php">Voltar</a>
