```php
<h2>Cadastrar Funcionário</h2>
<form method="POST" action="salvar.php">
<label>Nome:</label><br>
<input type="text" name="nome" required><br><br>


<label>Cargo:</label><br>
<input type="text" name="cargo" required><br><br>


<label>Telefone:</label><br>
<input type="text" name="telefone"><br><br>


<label>Email:</label><br>
<input type="email" name="email"><br><br>


<label>Salário:</label><br>
<input type="number" step="0.01" name="salario" required><br><br>


<button type="submit">Salvar Funcionário</button>
</form>
<br>
<a href="listar.php">Voltar</a>
```


---