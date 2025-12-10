php
<?php
include "../../config/conexao.php";


$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];


$sql = $pdo->prepare("INSERT INTO cliente (nome, telefone, email, endereco) VALUES (?, ?, ?, ?)");
$sql->execute([$nome, $telefone, $email, $endereco]);


header("Location: listar.php");
exit;
?>
```


---