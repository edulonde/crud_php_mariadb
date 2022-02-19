<?php
include "conexao_banco.php";
$id_linguagem = $_GET['id_linguagem'];


$script_deletar_aplicacao = "DELETE FROM `tabela_linguagem` 
                                WHERE id_linguagem= $id_linguagem";

$script_deletar_aplicacao = mysqli_query($conexao,$script_deletar_aplicacao);
?>

<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exclusão</title>
</head>
<body>
<h2>Linguagem excluída com sucesso</h2>
<br>

<a href="tela_exibicao_linguagem.php">Voltar</a>
</body>
</html>

