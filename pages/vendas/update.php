```php
<?php
include "../../config/conexao.php";


$id = $_POST['id'];
$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$salario = $_POST['salario'];


$sql = $pdo->prepare("UPDATE funcionario SET nome=?, cargo=?, telefone=?, email=?, salario=? WHERE id=?");
$sql->execute([$nome, $cargo, $telefone, $email, $salario, $id]);


header("Location: listar.php");
exit;
?>
```


---