```php
<?php
include "../../config/conexao.php";


$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
salario = $_POST['salario'];


$sql = $pdo->prepare("INSERT INTO funcionario (nome, cargo, telefone, email, salario) VALUES (?,?,?,?,?)");
$sql->execute([$nome, $cargo, $telefone, $email, $salario]);


header("Location: listar.php");
exit;
?>
```


---