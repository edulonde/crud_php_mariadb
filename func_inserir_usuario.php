<?php
include "conexao_banco.php";
include "scripts/password.php";

$nome_usuario = $_POST['nome_usuario'];
$email_usuario = $_POST['email_usuario'];
$senha_usuario = $_POST['senha_usuario'];

$sql = "INSERT INTO usuarios (nome_usuario,email_usuario, senha_usuario)
VALUES ('$nome_usuario', '$email_usuario', sha1('$senha_usuario'))";

$inserir = mysqli_query($conexao, $sql);

?>
<div>
    <h2>Usuário inserido com sucesso</h2>
</div>
<div>
    <h2>___</h2>
    <a href="index.php">Voltar</a>
</div>
