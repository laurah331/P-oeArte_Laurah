php
<?php
include "../../config/conexao.php";


$id = $_POST['id'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];


$sql = $pdo->prepare("UPDATE cliente SET nome=?, telefone=?, email=?, endereco=? WHERE id=?");
$sql->execute([$nome, $telefone, $email, $endereco, $id]);


header("Location: listar.php");
exit;
?>
```


---